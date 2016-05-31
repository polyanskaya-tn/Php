<?php

/*
	Клиент веб-сервиса Банка России (SOAP, Xml)
*/

class SoapCBR
{
	// WSDL службы Центробанка
	const WSDL = "http://www.cbr.ru/DailyInfoWebServ/DailyInfo.asmx?WSDL";
	// Экземпляр класса SoapClient
	protected $client;

	// Первоначальная инициализация
	public function __construct($is_debug=false)
	{
		$this->client = new SoapClient(SoapCBR::WSDL, array(
			/*'soap_version'      => SOAP_1_2,
			'login'             => "some_name",
			'password'          => "some_password",
			'proxy_host'        => "localhost",
			'proxy_port'        => 8080,
			'proxy_login'       => "some_name",
			'proxy_password'    => "some_password",
			'encoding'          =>'ISO-8859-1',
			*/
			'trace'             => $is_debug
			));
	}

	//Timestamp -> 2016-05-25T00:00:00+03:00
	function getSOAPDate($timeStamp, $withTime = false)
	{
		$soapDate = date("Y-m-d", $timeStamp);
		return ($withTime) ?
			$soapDate . "T" . date("H:i:s", $timeStamp) :
			$soapDate . "T00:00:00";
	}

	//2016-05-25T00:00:00+03:00 -> Date
	function getDate($soapDate)
	{
		$year = substr($soapDate, 0, 4);
		$month = substr($soapDate, 5, 2);
		$day = substr($soapDate, 8, 2);
		return $day.'.'.$month.'.'.$year;
	}

	function GetCursOnDateXML($date)
	{
		// Строка даты, на которую производится вызов
		$currentDate = $this->getSOAPDate($date);
		// Формируем массив параметров
		$params["On_date"] = $currentDate;
		// Вызов Веб-службы
		$response = $this->client->GetCursOnDateXML($params);
		// Возвращаем результат
		return $response->GetCursOnDateXMLResult->any;
	}

	function GetCursDynamicXML($fromDate, $toDate, $currency)
	{
		try {  
			// Формируем массив параметров
			$params["FromDate"] = $this->getSOAPDate($fromDate);
			$params["ToDate"] = $this->getSOAPDate($toDate);
			$params["ValutaCode"] = $currency;
			// Вызов Веб-службы
			$response = $this->client->GetCursDynamicXML($params);
			// Возвращаем результат
			return $response->GetCursDynamicXMLResult->any;
		} 
		catch (SoapFault $exception) {
			echo $exception;
		}
	}

	function Parse($xml_str, $xsl_file) 
	{
		$xml = new DOMDocument;
		$xml->loadXML($xml_str);

		// Load XSL file
		$xsl = new DOMDocument;
		$xsl->load($xsl_file);

		// Configure the transformer
		$proc = new XSLTProcessor;

		// Attach the xsl rules
		$proc->importStyleSheet($xsl);

		echo $proc->transformToXML($xml);
	}

	function ParseCursDynamicXML($xml) 
	{
		$xmlobj = simplexml_load_string($xml);
		$xPath = "/ValuteData/ValuteCursDynamic";
		$all = $xmlobj->xpath($xPath);
		$res = array();
		foreach ($all as $item)
		{
			$arr = array();
			$arr["CursDate"] =  $this->getDate($item->CursDate);
			$arr["Vnom"] = $item->Vnom;
			$arr["Vcurs"] = $item->Vcurs;
			$res[] = $arr;
		}
		return $res;
	}

	function debug()
	{
		//Выводим все функции
		//var_dump($this->client->__getFunctions());
		//Отладка SOAP - только если при создании SoapClient передан trace=true
		var_dump($this->client->__getLastRequest());
		var_dump($this->client->__getLastRequestHeaders());
		var_dump($this->client->__getLastResponse());
		var_dump($this->client->__getLastResponseHeaders());
	}
}
   
?>

