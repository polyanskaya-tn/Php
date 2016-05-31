<?php

/*
	Показывает ежедневные курсы валют Банка России
*/

require("soap_client.php");

header('Content-Type: text/html; charset=utf-8');

$soap = new SoapCBR(true);

//Официальные курсы валют на заданную дату, устанавливаемые ежедневно (с помощью XSLTProcessor)
$curDate = date("U");
$xml = $soap->GetCursOnDateXML($curDate); 
$xsl_file = 'cursdate.xsl';
$soap->Parse($xml, $xsl_file);

?>