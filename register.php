<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {color: #FFFFFF; }
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
.style15 {
	font-size: xx-large;
	font-weight: bold;
}
table {
}
.style16 {color: #00FF33}
.style22 {color: #FF0000; font-weight: bold; font-size: 14px; }
-->
</style>
</head>

<body>
<table width="200" border="3" align="center" bordercolor="#000000" bgcolor="#000000">
  <tr>
    <td><table width="819" border="0" align="center" bordercolor="#000000" bgcolor="#EBEBEB">
      <tr bordercolor="#000000">
        <td width="813" valign="baseline" bgcolor="#000000"><p class="style2">&nbsp;</p>
            <p class="style4">Organisational <span class="style16">Data</span> Center</p>
          <p class="style1">&nbsp;</p></td>
      </tr>
      <tr>
        <td height="29" bgcolor="#000000"><table width="472" border="0" align="right" bordercolor="#FFFFFF">
            <tr>
              <td width="45" height="23" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style6"><a href="index.php">Home</a></span></td>
              <td width="43" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style1 style8"><span class="style2 style1"><a href="login.php">Login</a></span></span></td>
              <td width="47" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style1 style10"><span class="style2 style1"><a href="admin.php">Admin</a></span></span></td>
              <td width="55" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style1 style12"><span class="style2"><a href="register.php">Register</a></span></span></td>
              <td width="66" bgcolor="#000000" onmousemove="this.style.backgroundColor='#00FF00'" onmouseout="this.style.backgroundColor='#000000'"><span class="style1 style14"><span class="style2 style1"><a href="about.php">About Us </a></span></span></td>
            </tr>
        </table></td>
      </tr>
      <tr bgcolor="#99CCFF">
        <td height="428" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" onsubmit="return Checkfiles()" enctype="multipart/form-data">
          <table width="458" height="503" border="3" align="center" bordercolor="#000000">
            <tr>
              <td width="444" height="493" bgcolor="#FFFFFF"><table width="464" height="466" border="0">
                  <tr>
                    <td colspan="2"><div align="center" class="style15">Registration Form </div></td>
                  </tr>
                  <tr>
                    <td width="128" height="26"><strong>Category :- </strong></td>
                    <td><strong>
                      <label>
                      <input name="flag" type="radio" value="0" checked="checked" />
                      Student</label>
                      <label>
                      <input name="flag" type="radio" value="1" />
                      Staff</label>
                    </strong></td>
                  </tr>
                  <tr>
                    <td><strong>Name :- </strong></td>
                    <td width="326"><input name="nm" type="text" id="nm" />
					<?php
					if($_POST["con"]=="" && $_POST["Submit"]!="")
					{
					?>	                    <span class="style22">Name cannot be blank</span></td>
                    <?php
					$error=1;
				}
					?>
					
                  <tr>
                    <td><strong>Enrollment No. :- </strong></td>
                    <td><strong>
                      <label>
                      <input name="en" type="text" id="en" />
                        </label>
                    </strong></td>
                  </tr>
                  <tr>
                    <td><strong>Branch :-</strong></td>
                    <td><strong>
                      <label>
                      <select name="br" id="br">
                        <option>Computer Technology</option>
                        <option>Information Technology</option>
                        <option>Mechanical Engineering</option>
                        <option>Electrical technology</option>
                        <option>Electronics &amp; telecommunication</option>
                        <option>Civil Engineering</option>
                        <option>Chemical Engineering</option>
                      </select>
                      </label>
                    </strong> </td>
                  </tr>
                  <tr>
                    <td><strong>Year :- </strong></td>
                    <td><strong>
                      <label>
                      <select name="yr" id="yr">
                        <option>1st Year</option>
                        <option>2nd Year</option>
                        <option>3rd Year</option>
                      </select>
                      </label>
                    </strong> </td>
                  </tr>
                  <tr>
                    <td height="26"><strong>Gender :- </strong></td>
                    <td><strong>
                        <label>
                      <input name="gn" type="radio" value="M" />
                      Male</label>
                        <label>
                          <input name="gn" type="radio" value="F" />
                          Female</label>
                                        </strong><?php
										if($_POST["gn"]=="" && $_POST["Submit"]!="")
										{
										$error=1;
										?>
                                        <span class="style22">Please select gender										</span>
                                        <?php
										}
										?></td>
                  </tr>
                  <tr>
                    <td height="24"><strong>Date Of Birth :-</strong></td>
                    <td bgcolor="#FFFFFF"><strong>
                        <label>
                      <select name="bd" id="bd">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                      </select>
                        </label>
                        <label>
                        <select name="bm" id="bm">
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                          <option>04</option>
                          <option>05</option>
                          <option>06</option>
                          <option>07</option>
                          <option>08</option>
                          <option>09</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                        </label>
                        <label>
                        <select name="byr" id="byr">
                          <option>1992</option>
                          <option>1993</option>
                          <option>1994</option>
                          <option>1995</option>
                          <option>1996</option>
                          <option>1997</option>
                          <option>1998</option>
                          <option>1999</option>
                          <option>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2003</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                          <option>2011</option>
                          <option>2012</option>
                          <option>2013</option>
                          <option>2014</option>
                          <option>2015</option>
                          <option>2016</option>
                          <option>2017</option>
                          <option>2018</option>
                          <option>2019</option>
                        </select>
                        </label>
                        <label></label>
                    </strong></td>
                  </tr>
                  <tr>
                    <td><strong> Address :- </strong></td>
                    <td><strong>
                      <label>
                      <textarea name="add" id="add"></textarea>
                        </label>
                    </strong> </td>
                  </tr>
                  <tr>
                    <td><strong>Contact :- </strong></td>
                    <td><strong>
                      <label>
                      <input name="con" type="text" id="con" />
                      </label>
                    </strong> <?php
					if(is_numeric($_POST["con"])!=1 && $_POST["Submit"]!="")
					{
					?>	                    <span class="style22"> Invalid contact number </span></td>
                    <?php
					$error=1;
				}
					?>
				  </tr>
                  <tr>
                    <td><strong>Email ID :- </strong></td>
                    <td><strong>
                      <label>
                      <input name="eid" type="text" id="eid" />
                      </label>
                    </strong> </td>
                  </tr>
                  <tr>
                    <td><strong>Blood Group :- </strong></td>
                    <td><strong>
                      <label>
                      <input name="bg" type="text" id="bg" />
                      </label>
                    </strong> </td>
                  </tr>
                  <tr>
                    <td><strong>Profile Picture :- </strong></td>
                    <td><strong>
                      <label>
                      <input name="pp" type="file" id="pp" />
                      </label>
                    </strong> </td>
                  </tr>
                  <tr>
                    <td><strong> Password :- </strong></td>
                    <td><strong>
                      <label>
                      <input name="pwd" type="password" id="pwd" />
                      </label>
                    </strong> </td>
                  </tr>
                  <tr>
                    <td><strong>Confirm Password :- </strong></td>
                    <td><strong>
                      <label>
                      <input name="cpwd" type="password" id="cpwd" />
                      </label>
                    </strong> </td>
                  </tr>
                  <tr>
                    <td colspan="2"><div align="center">
                        <label>
                        <input type="submit" name="Submit" value="Register" />
                        </label>
                    </div>
                      <div align="center">
                        <div align="center"><span class="style19">
                          <?php
if($_POST["Submit"]!="")
{
//print_r($_POST);
$error=0;
$nm=$_POST["nm"];
$en=$_POST["en"];
$br=$_POST["br"];
$yr=$_POST["yr"];
$gn=$_POST["gn"];
$bd=$_POST["bd"];
$bm=$_POST["bm"];
$byr=$_POST["byr"];
$add=$_POST["add"];
$con=$_POST["con"];
$eid=$_POST["eid"];
$bg=$_POST["bg"];
$pp=$_POST["pp"];
$pwd=$_POST["pwd"];
$cpwd=$_POST["cpwd"];
$f=$_FILES[pp]["name"];
$d=getdate();
$id=$_POST["flag"];
$res=move_uploaded_file($_FILES[pp]["tmp_name"],"uploads/$f");
//echo $res;
$fp="uploads/".$f;
$dob=$bd." / ". $bm." / ".$byr;

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_select_db("minic",$link);
$sel="SELECT * 
FROM `registration_table` 
WHERE `name` = '$nm';";
$res=mysql_db_query('minic',$sel);

if (mysql_num_rows($res) != 0) 
{
            $error=1;
			?>
			<span class="style18">User Already Exits</span>                      </div>
                 
<?php }
else if($error==0)
{
$s1="INSERT INTO  `minic`.`registration_table` (
`Name` ,
`Enrollment No.` ,
`Branch` ,
`Academic Year` ,
`Gender` ,
`BDate` ,
`Address` ,
`Contact` ,
`Email` ,
`BloodGroup` ,
`Password` ,
`profile` ,
`id`
)
VALUES (
'$nm',  '$en',  '$br',  '$yr',  '$gn',  '$dob',  '$add',  '$con',  '$eid',  '$bg',  '$pwd',  '$fp', '$id'
);

";
$res=mysql_db_query('minic',$s1);


mysql_close($link);
}
}
?>
                      </div></td>
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
