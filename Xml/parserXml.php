<?php

/*
	Класс парсер Xml, данные берутся из строки или из файла
*/

class parserXml {

    var $parser;	//парсер Xml
	var $buffer;	//здесь лежит путь к файлу если парсить из файла 
					//или строка в формате Xml если данные из строки
    var $name;
    var $attr;
    var $data  = array();
    var $stack = array();	//сохранение всех ключей от начала дерева до текстовой информации
    var $keys;
    var $path;
   
    var $type;		//тип - строка или файл
	var $error;		//сообщение об ошибке

	//$type : url - из файла, contents - из строки
    function parserXml($str, $type='url') {
        $this->type = $type; 
        $this->buffer  = $str;
        $this->parse();
    }
   
    // parse XML data
    function parse()
    {
		$data = '';
        $this->parser = xml_parser_create();
		//позволяет использовать parser внутри объекта object
        xml_set_object($this->parser, $this);
		// указываем какие функции будут работать при открытии и закрытии тегов
        xml_set_element_handler($this->parser, 'startXML', 'endXML');
		// указываем функцию для работы с данными
        xml_set_character_data_handler($this->parser, 'charXML');

        xml_parser_set_option($this->parser, XML_OPTION_CASE_FOLDING, false);

        if ($this->type == 'url') {
           
            if (!($fp = @fopen($this->buffer, 'rb'))) {
                $this->error("Cannot open {$this->buffer}");
				return;
            }
			//читаем из файла по 8Кб
            while (($data = fread($fp, 8192))) {
                if (!xml_parse($this->parser, $data, feof($fp))) {
                    $this->error(sprintf('XML error at line %d column %d',
                    xml_get_current_line_number($this->parser),
                    xml_get_current_column_number($this->parser)));
					return;
                }
            }
        } else if ($this->type == 'contents') {
            // Now we can pass the contents, maybe if you want
            // to use CURL, SOCK or other method.
            $lines = explode("\n",$this->buffer);
            foreach ($lines as $val) {
                if (trim($val) == '')
                    continue;
                $data = $val . "\n";
                if (!xml_parse($this->parser, $data)) {
                    $this->error(sprintf('XML error at line %d column %d',
                    xml_get_current_line_number($this->parser),
                    xml_get_current_column_number($this->parser)));	
					return;
                }
            }
        }
    }

    function startXML($parser, $name, $attr)    {
        $this->stack[$name] = array();
        $keys = '';
        $total = count($this->stack)-1;
        $i=0;
        foreach ($this->stack as $key => $val)    {
            if (count($this->stack) > 1) {
                if ($total == $i)
                    $keys .= $key;
                else
                    $keys .= $key . '|'; // The saparator
            }
            else
                $keys .= $key;
            $i++;
        }
        if (array_key_exists($keys, $this->data))    {
            $this->data[$keys][] = $attr;
        }    else
            $this->data[$keys] = $attr;
        $this->keys = $keys;
    }

    function endXML($parser, $name)    {
        end($this->stack);
        if (key($this->stack) == $name)
            array_pop($this->stack);
    }

    function charXML($parser, $data)    {
        if (trim($data) != '')
            $this->data[$this->keys]['data'][] = trim(str_replace("\n", '', $data));
    }

    function error($msg)    {
		$this->error = $msg;
    }
} 

?>
