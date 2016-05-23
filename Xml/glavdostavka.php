<?php

	require_once('./parserXml.php');

	$url = 'http://glav-dostavka.ru/api/calc/?responseFormat=xml&method=api_city';

	$session = curl_init();
	curl_setopt($session, CURLOPT_URL, $url);
	curl_setopt($session, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($session, CURLOPT_HEADER, 0);
	$response = curl_exec($session);
	//$info = curl_getinfo($session);
	curl_close($session);

	var_dump($response);

	$xml = new parserXml($response,'contents');
	if ($xml->error != '')
	{
		//Произошла ошибка
		echo "<div align=\"center\">
            <font color=\"red\"><b>Error: ".$xml->error."</b></font>
            </div>";
	}
	//Обработка массива данных полученных из Xml парсера
	$arr = array();
	foreach ($xml->data as $key => $val)	{
		if (array_key_exists('data', $xml->data[$key]))
			foreach ($xml->data[$key]['data'] as $key1 => $val1)	{
				$pieces = explode('|', $key);
				end($pieces);
				$key2 = current($pieces);
				$arr[$key1][$key2] = $val1; 
			}
	}

?>	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Xml parser</title>
</head>
<body>
	<table border="1">
	<?
		//заголовок
		echo '<tr>';
		foreach (current($arr) as $key => $val) {
			echo "<td>$key</td>";	
		}
		echo '</tr>';
		//данные
		foreach ($arr as $item) {
			echo '<tr>';
			foreach ($item as $key => $val) 
				echo "<td>$val</td>";
			echo '</tr>';			
		}
	?>
    </table>
</body>
</html>

