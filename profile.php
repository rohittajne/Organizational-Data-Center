<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 24px;
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
.style5 {font-size: 18px}
.style6 {font-style: italic}
.style7 {
	color: #0099FF;
	font-weight: bold;
}
.style8 {
	color: #007C00;
	font-weight: bold;
}
.style11 {
	color: #FF0000;
	font-weight: bold;
}
.style12 {
	color: #00CC00;
	font-weight: bold;
}
.style15 {color: #00FF33}
.style4 {	color: #FFFFFF;
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<?php
ini_set( "display_errors", 0);
$user=$_GET["user"];
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$sel="SELECT * 
FROM `registration_table` 
WHERE `name` = '$user';";
$res=mysql_db_query('minic',$sel);

while($row=mysql_fetch_assoc($res))
{
?>
<table width="832" height="932" border="3" align="center" bordercolor="#000000">
  <tr>
    <td width="818" height="928"><table width="825" border="1" align="center">
      <tr>
        <td width="499" bordercolor="#E2E2E2" bgcolor="#000000"><p>&nbsp;</p>
          <p class="style2"><span class="style4">Organisational <span class="style15">Data</span> Center</span></p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="810"><p align="right"><a href="index.php"><strong>Logout</strong></a></p>
        <table width="775" border="1" align="center">
          <tr>
            <td width="194" height="236" valign="top"><p><img src="<?php echo $row["profile"]; ?>" width="196" height="181" border="3" align="top" /></p>
              <p align="center"><strong><?php echo $row["Name"]; ?></strong></p>              </td>
            <td width="565" valign="middle"><table width="565" border="0">
              <tr>
                <td colspan="3"><div align="center">
                  <p><em><strong>Depatartment of </strong>&quot;</em><strong><em><?php echo $row["Branch"]; ?></em></strong><em>&quot; </em></p>
                  <p>&nbsp;</p>
                </div></td>
                </tr>
              <tr>
                <td width="283"><strong>Date Of Birth:</strong> [<?php echo $row["BDate"]; ?>]</td>
                <td width="41">&nbsp;</td>
                <td width="227"><strong>Gender : <?php echo $row["Gender"]; ?></strong></td>
              </tr>
            </table>
              <p align="justify"><img src="address_icon.jpg" width="44" height="29" align="absmiddle" /><span class="style6"> <?php echo $row["Address"]; ?></span></p>
              <p align="center"><img src="Email-Icon.jpg" width="46" height="26" align="absmiddle" /> <span class="style5"><?php echo $row["Email"]; ?> </span></p>
              <p align="center"><img src="Phone-icon.png" width="37" height="32" align="absmiddle" /><span class="style5"> [<?php echo $row["Contact"]; ?>]</span></p></td>
          </tr>
          <tr>
            <td>
              <p align="center"><span class="style7">Notice Panel</span> <br>
                </p>              </td>
            <td rowspan="3" align="center" valign="top"><table width="566" height="257" border="2">
              <tr>
                <td width="187" height="46"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="201" height="18">
                  <param name="movie" value="button2.swf" />
                  <param name="quality" value="high" />
                  <embed src="button2.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="201" height="18" ></embed>
                </object></td>
                <td width="184"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="177" height="18">
                  <param name="movie" value="button3.swf" />
                  <param name="quality" value="high" />
                  <embed src="button3.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="177" height="18" ></embed>
                </object></td>
                <td width="180"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="189" height="18">
                  <param name="movie" value="button4.swf" />
                  <param name="quality" value="high" />
                  <embed src="button4.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="189" height="18" ></embed>
                </object></td>
              </tr>
              <tr>
			  <?php
			  $link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$s="SELECT * 
FROM  `msg` 
WHERE  `To` =  '$user'";
$res=mysql_db_query('minic',$s);
?>
 <td height="201"><textarea cols="30" rows="10" disabled="disabled" >
 <?php
			 while ($row=mysql_fetch_assoc($res))
			 {
			  ?>
<?php echo $row['From'];?> :
	"<?php echo $row['msg'];?>"
	  
	  
				  <?php
				  }?>
 </textarea></td>
                <td><form id="form1" name="form1" method="post" action="">
                  <label> 
                  <div align="left"><strong>To:</strong><br />
                    <input name="to" type="text" id="to" />
                  </div>
                  </label>
                                <p align="left"><strong>Message:
                                    <label>                                    </label></strong><label><textarea name="msg" id="msg"></textarea>
                                  </label>
                                </p>
                                <p align="center">
                                  <label>
                                  <input type="submit" name="send" value="Send" />
								  <?php
								  $s=getdate();
								$d= $s[mday].$s[month].$s[year];
								$t=$s[hours]." : ".$s[minutes];
								$from=$user;
								$to=$_POST["to"];
								$msg=$_POST["msg"];
if($_POST["send"]!="")
{
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$sel="SELECT * 
FROM `registration_table` 
WHERE `name` = '$to';";
$res=mysql_db_query('minic',$sel);
$num_rows = mysql_num_rows($res);
if($num_rows==0)
{
?>
                                  <span class="style11">No Such User ..!!                                 </span>
                                  <?php
}
else
 {
 $link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$s1="INSERT INTO  `minic`.`msg` (
`Date` ,
`Time` ,
`To` ,
`From` ,
`msg`
)
VALUES ('$d',  '$t',  '$to',  '$from',  '$msg');";
$res=mysql_db_query('minic',$s1);
if (!$res) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}
}
?>
<script type="text/javascript">
alert("sent..!!");
</script>
<?php
mysql_close($link);
}
}
?>
                                  </label>
                                </p>
                </form>                </td>
                <td><form action="" method="post" enctype="multipart/form-data" name="form2" id="form2">
                  <label>
                  <div align="center">
                    <p><br />
                          <input name="ds" type="file" id="ds" />
                          <strong><br />
                          <label>
                          <div align="left">Description                          </label>
                          </strong>
                          <label>
                        
                            <div align="center">
                              <textarea name="des" id="des"></textarea>
                            </div>
                          </label>
                          <p><br />
                        <br />
                        <input name="share" type="submit" id="share" value="Share" />
                      </p>
                    <p><?php
					if($_POST["share"]!="")
					{
					$f=$_FILES[ds]["name"];
					$res=move_uploaded_file($_FILES[ds]["tmp_name"],"uploads/$f");
					$fp="uploads/".$f;
					?>
                     <span class="style12">Done..!!!</span>
					<?php
					$desc=$_POST["des"];
					 $link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$s1="INSERT INTO  `minic`.`data_share` (
`Date` ,
`Time` ,
`File` ,
`Author` ,
`desc`
)
VALUES (
'$d',  '$t',  '$f',  '$user',  '$desc'
);
";
$res=mysql_db_query('minic',$s1);
if (!$res) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

mysql_close($link);

					}			
					?></p>
                  </label>
                                                                <div align="center"></div>
                </form>                </td>
              </tr>
            </table>
            <p class="style7">Dash Board </p>
              <table width="637" border="1">
                <tr>
                  <td width="39"><div align="center"><strong>Sr.No</strong></div></td>
                  <td width="64"><div align="center"><strong>File </strong></div></td>
                  <td width="62"><div align="center"><strong>Author</strong></div></td>
                  <td width="342"><div align="center"><strong>Description</strong></div></td>
                  <td width="96"><div align="center"><strong>Download Link </strong></div></td>
                </tr>
				<?php
				$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$sel="SELECT * 
FROM `data_share` ORDER BY  `data_share`.`Date` ASC;";
$res=mysql_db_query('minic',$sel);
$cnt=0;
while($row=mysql_fetch_assoc($res))
{
$cnt++;
?>

			 <tr>
                  <td><?php echo $cnt;?></td>
                  <td><?php echo $row["File"];?></td>
                  <td><?php echo $row["Author"];?></td>
                  <td><?php echo $row["desc"];?></td>
                  <td><a href="dwn.php?download_file=<?php echo $row["File"];?>" ><img src="images/download-icon.jpg" width="84" height="55" border="0" /></a></td>
                </tr>
				<?php
				}
				?>
              </table>
              <p>&nbsp;</p>
              <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td height="131" valign="top"><marquee behavior="scroll" align="middle" direction="up" bgcolor="#CCCCCC" scrollamount="5" truespeed="slow" onmousemove="stop();" onmouseout="start();"><?php
			$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$sel="SELECT * 
FROM `notice`;";
$res=mysql_db_query('minic',$sel);
$cnt=0;
while($row=mysql_fetch_assoc($res))
{
				?>
              <p align="center"><a href="dwn.php?download_file=<?php echo $row["File"];?>"><?php echo $row["Title"];?></a></p>
              <p align="center">&nbsp;</p>
              <p align="center">&nbsp;</p>
            <?php
			}
			?>
			</marquee></td>
          </tr>
          <tr>
            <td height="319" align="center" valign="middle"><p><a href="cbt.php?u=Android&amp;user=<?php echo $user;?>"><strong>Take Me To CBT </strong></a></p>
              <p>&nbsp;</p>
              <p class="style8">&nbsp;</p></td>
          </tr>
        </table>        
        </td>
      </tr>
      
    </table></td>

  </tr>
</table>
</body>
</html>
