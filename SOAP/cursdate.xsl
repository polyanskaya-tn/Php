<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <h2>Официальные курсы валют, устанавливаемые ежедневно</h2>
    <table>
      <tr bgcolor="#9acd32">
        <th>Цифр. код</th>
        <th>Букв. код</th>
        <th>Единиц</th>
        <th>Валюта</th>
        <th>Курс</th>
      </tr>
      <xsl:for-each select="ValuteData/ValuteCursOnDate">
        <tr>
          <td><xsl:value-of select="Vcode"/></td>
          <td><xsl:value-of select="VchCode"/></td>
          <td><xsl:value-of select="Vnom"/></td>
          <td><xsl:value-of select="Vname"/></td>
          <td><xsl:value-of select="Vcurs"/></td>
        </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet> 
