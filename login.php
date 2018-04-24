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
.style19 {color: #00FF00}
.style21 {color: #00FF00; font-weight: bold; }
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
.style15 {color: #00FF33}
-->
</style>
</head>

 <?php 
if($_POST["Submit"]!="")
{
$unm=$_POST["unm"];
$upwd=$_POST["upwd"];
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$sel="SELECT * 
FROM `registration_table` 
WHERE `name` = '$unm'
AND `password` = '$upwd';";
$res=mysql_db_query('minic',$sel);

if (mysql_num_rows($res) != 0) 
{
  $s=getdate();
								$d= $s[mday].$s[month].$s[year];
								$t=$s[hours]." : ".$s[minutes];
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$s1="INSERT INTO  `minic`.`logs` (
`Date` ,
`Time` ,
`User Name`
)
VALUES (
'$d',  '$t',  '$unm'
);
";
$res=mysql_db_query('minic',$s1);

mysql_close($link);


?>
  <script type="text/javascript">
	window.location="profile.php?user=<?php echo $unm;?>"
</script>
<?php
}
else
{
?>
  <script type="text/javascript">
	alert("invalid user");
</script>
<?php
}
}
?>
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
        <td height="29" bgcolor="#000000"><table width="472" border="0" align="right" bordercolor="#FFFFFF">
            <tr>
              <td width="45" height="23" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style6"><a href="index.php">Home</a></span></td>
              <td width="43" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style1 style8"><span class="style2 style1"><a href="login.php">Login</a></span></span></td>
              <td width="47" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style1 style10"><span class="style2 style1"><a href="admin.php">Admin</a></span></span></td>
              <td width="55" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style1 style12"><span class="style2 style1"><a href="register.php">Register</a></span></span></td>
              <td width="66" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style1 style14"><span class="style2 style1"><a href="about.php">About Us </a></span></span></td>
            </tr>
        </table></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="123"><table width="822" height="121" border="0" align="center">
          <tr>
            <td height="117"><div align="center"><img src="register.webp" alt="login" width="106" height="115" /></div></td>
            </tr>
        </table>          </td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td height="244"><form id="form1" name="form1" method="post" >
          <table width="200" border="3" align="center" bordercolor="#000000">
            <tr>
              <td><table width="261" height="228" border="0" align="center">
                  <tr>
                    <td colspan="2"><div align="center" class="style16">Login</div></td>
                  </tr>
                  <tr>
                    <td width="104" height="31"><div align="center" class="style17">User Name </div></td>
                    <td width="160"><input name="unm" type="text" id="unm" />                    </td>
                  </tr>
                  <tr>
                    <td height="34"><div align="center" class="style17">Password</div></td>
                    <td><input name="upwd" type="password" id="upwd" />                    </td>
                  </tr>
                  <tr>
                    <td height="65" colspan="2"><label> </label>
                        <div align="center">
                          <input type="submit" name="Submit" value="Submit" />
                          <br />
                        </div>
						<div align="center"><strong>
						  <span class="style19">
						 
                      
                  </tr>
              </table></td>
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
