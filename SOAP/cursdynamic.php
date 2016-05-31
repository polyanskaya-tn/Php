<html>
<head>
  <meta charset="utf-8">
  <title>Курсы валют</title>
</head>
<body>
<?php
  require("soap_client.php");
  $soap = new SoapCBR(true);

  //Динамика официального курса заданной валюты (c помощью XPath)
  $fromDate = new DateTime();
  $fromDate->setDate(2016, 5, 1);

  $toDate = new DateTime();
  $toDate->setDate(2016, 5, 30);
  $xml = $soap->GetCursDynamicXML($fromDate->getTimestamp(), $toDate->getTimestamp(),'R01235');
  $curses = $soap->ParseCursDynamicXML($xml);
?>
  <h2>Динамика официального курса валюты Доллар</h2>
    <table>
      <tr bgcolor="#9acd32">
        <th>Дата</th>
        <th>Единиц</th>
        <th>Курс</th>
      </tr>

      <?php foreach ($curses as $item)
        {
          echo "<tr>";
          echo "<td>".$item["CursDate"]."</td>";
          echo "<td align='center'>".$item["Vnom"]."</td>";
          echo "<td>".$item["Vcurs"]."</td>";
          echo "</tr>";
        }
      ?>
    </table>
</body>
</html>
