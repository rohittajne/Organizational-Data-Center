<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {color: #FFFFFF; }
.style3 {
	color: #00FF33;
	font-size: larger;
}
.style4 {
	color: #FFFFFF;
	font-size: 36px;
	font-weight: bold;
}
body,td,th {
	color: #000000;
}
a:link {
	color: #FF0000;
}
a:visited {
	color: #FF0000;
}
a:hover {
	color: #FF0000;
}
a:active {
	color: #FF0000;
}
.style5 {
	color: #0099FF;
	font-weight: bold;
}
.style8 {color: #666666; font-style: italic; font-weight: bold; }
.style15 {color: #00FF33}
-->
</style>
</head>
<body>
<table width="200" border="3" align="center" bordercolor="#000000">
  <tr>
    <td><table width="819" border="0" align="center" bordercolor="#000000" bgcolor="#EBEBEB">
      <tr bordercolor="#000000">
        <td width="813" valign="baseline" bgcolor="#000000"><p class="style2">&nbsp;</p>
            <p class="style4">Organisational <span class="style15">Data</span> Center</p>
          <p class="style1">&nbsp;</p></td>
      </tr>
      <tr>
        <td height="29" bgcolor="#000000"><div align="right"><a href="index.php"><strong>Logout</strong></a></div></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="58"><table width="822" height="56" border="0" align="center">
          <tr>
            <td width="296" height="52"><div align="center">
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="198" height="45">
                <param name="BGCOLOR" value="" />
                <param name="movie" value="button13.swf" />
                <param name="quality" value="high" />
                <embed src="button13.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="198" height="45" ></embed>
              </object>
            </div></td>
            <td width="265"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="237" height="46">
              <param name="BGCOLOR" value="" />
              <param name="movie" value="button14.swf" />
              <param name="quality" value="high" />
              <embed src="button14.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="237" height="46" ></embed>
            </object></td>
            <td width="247"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="243" height="48">
              <param name="BGCOLOR" value="" />
              <param name="movie" value="button15.swf" />
              <param name="quality" value="high" />
              <embed src="button15.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="243" height="48" ></embed>
            </object></td>
          </tr>
        </table>          </td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="244"><table width="657" border="1" align="center">

		  <tr>
            <td width="79" height="25"><span class="style5">Sr.No</span></td>
            <td width="68"><span class="style5">Date</span></td>
            <td width="91"><span class="style5">Time</span></td>
            <td width="95"><span class="style5">User</span></td>
            </tr>
		            <?php
				$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$sel="SELECT * 
FROM `logs`;";
$res=mysql_db_query('minic',$sel);
$cnt=0;
while($row=mysql_fetch_assoc($res))
{
$cnt++;
?>
          <tr>
            <td><span class="style8"><?php echo $cnt;?></span></td>
            <td><span class="style8"><?php echo $row["Date"];?></span></td>
            <td><span class="style8"><?php echo $row["Time"];?></span></td>
            <td><span class="style8"><?php echo $row["User Name"];?></span></td>
            </tr>
  <?php
  }
  ?>
                                                                        </table>
          <p align="center">&nbsp;</p></td>
      </tr>
      <tr bordercolor="#000000">
        <td height="174" bgcolor="#000000"><div align="center"><br />
          </div>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
