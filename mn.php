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
.style6 {color: #000000; font-weight: bold; }
.style8 {font-weight: bold}
.style10 {font-weight: bold}
.style12 {font-weight: bold}
.style14 {font-weight: bold}
.style16 {
	font-size: xx-large;
	font-weight: bold;
}
.style17 {font-size: large; font-weight: bold; }
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
        <td height="244"><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table width="358" border="5" align="center" bordercolor="#195946">
            <tr>
              <td width="117">Title Of Notice : </td>
              <td width="218"><label>
                <input name="title" type="text" id="title" />
              </label></td>
            </tr>
            <tr>
              <td>File Path </td>
              <td><label>
                <input type="file" name="notice" />
              </label></td>
            </tr>
            <tr>
              <td colspan="2"><label>
                <div align="center">
                  <input name="Publish" type="submit" id="Publish" value="Publish" />
				  <?php
				  $title=$_POST["title"];
				  if($_POST["Publish"]!="")
					{
					$f=$_FILES["notice"]["name"];
					$res=move_uploaded_file($_FILES["notice"]["tmp_name"],"uploads/$f");
					$fp="uploads/".$f;
						  $s=getdate();
								$d= $s[mday].$s[month].$s[year];
								$t=$s[hours]." : ".$s[minutes];
					 $link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$s1="INSERT INTO  `minic`.`notice` (
`Title` ,
`File` ,
`Date` ,
`Time`
)
VALUES (
'$title',  '$f',  '$d',  '$t'
);";
$res=mysql_db_query('minic',$s1);
if (!$res) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

mysql_close($link);

					}			
					?>
					
					
			
                </div>
              </label></td>
            </tr>
          </table>
                </form>        </td>
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
