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
	font-size: 36px;
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
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style6 {
	color: #FFFFFF;
	font-weight: bold;
}
.style15 {color: #00FF33}
-->
</style>
<?php
$f=$_GET["u"];
$nm=$_GET["user"];
?>
<script type="text/javascript">
function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
  
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>
</head>

<body onload="MM_CheckFlashVersion('7,0,0,0','Content on this page requires a newer version of Macromedia Flash Player. Do you want to download it now?');">
<table width="894" height="605" border="3" align="center" bordercolor="#000000">
  <tr bgcolor="#000000">
    <td height="99" colspan="3"><p class="style2">&nbsp;</p>
      <p class="style2">&nbsp;</p>
      <p class="style2">Organisational <span class="style15">Data</span> Center</p>
      <p>&nbsp;</p>
      <table width="882" border="0">
        <tr>
          <td width="369"><span class="style6">Hi <?php echo $_GET["user"]; ?>,Welcome To CBT</span> </td>
          <td width="370"><a href="profile.php?user=<?php echo $nm; ?>"><strong>Home</strong></a></td>
          <td width="123"><a href="index.php" class="style6">Logout</a></td>
        </tr>
    </table>    </td>
  </tr>
  <tr>
    <td width="220" height="73"><div align="center">
      <p class="style4">Introduction To Android 2.3          </p>
      <p><a href="cbt.php?u=Android&amp;user=<?php echo $nm; ?>"><img src="image_play.jpg" alt="k" width="58" height="60" border="0" /></a></p>
    </div></td>
    <td width="422" rowspan="4"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="422" height="371" id="FLVPlayer">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="salign" value="lt" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Halo_Skin_3&streamName=cbt/<?php echo $f;?>&autoPlay=false&autoRewind=false" />
      <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Halo_Skin_3&streamName=cbt/<?php echo $f;?>&autoPlay=false&autoRewind=false" quality="high" scale="noscale" width="422" height="371" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />    
</object></td>
    <td width="226"><div align="center">
      <p class="style4">How DNS Works ?? </p>
      <p class="style4"><a href="cbt.php?u=HowDNSWorks&amp;user=<?php echo $nm; ?>"><img src="image_play.jpg" alt="k" width="58" height="60" border="0" /></a></p>
    </div></td>
  </tr>
  <tr>
    <td height="76"><div align="center">
      <p class="style4">How Does SMTP Works ??</p>
      <p><a href="cbt.php?u=howemailworks&amp;user=<?php echo $nm; ?>"><img src="image_play.jpg" alt="k" width="58" height="60" border="0" /></a></p>
    </div></td>
    <td width="226"><p align="center" class="style4">How To disable Task Manager Using VB-6.0 ??</p>
    <p align="center"><a href="cbt.php?u=DisableTaskman&amp;user=<?php echo $nm; ?>"><img src="image_play.jpg" alt="k" width="58" height="60" border="0" /></a></p></td>
  </tr>
  <tr>
    <td height="107"><div align="center">
      <p class="style4">How Does HTTP Works ?? </p>
      <p><a href="cbt.php?u=http&amp;user=<?php echo $nm; ?>"><img src="image_play.jpg" alt="k" width="58" height="60" border="0" /></a></p>
    </div></td>
    <td width="226"><div align="center">
      <p class="style4">How To Create Auto Typer Using VB-6.0 ??</p>
      <p class="style4"><a href="cbt.php?u=AutoTyper&amp;user=<?php echo $nm; ?>"><img src="image_play.jpg" alt="k" width="58" height="60" border="0" /></a></p>
    </div></td>
  </tr>
  <tr>
    <td height="74"><div align="center">
      <p class="style4">Work At Google ?? </p>
      <p class="style4"><a href="cbt.php?u=GoogleHistory&amp;user=<?php echo $nm; ?>"><img src="image_play.jpg" alt="k" width="58" height="60" border="0" /></a></p>
    </div></td>
    <td width="226"><div align="center">
      <p class="style4">How To Make Screen Capture Program ?? </p>
      <p class="style4"><a href="cbt.php?u=ScreenCaptureProgram&amp;user=<?php echo $nm; ?>"><img src="image_play.jpg" alt="k" width="58" height="60" border="0" /></a></p>
    </div></td>
  </tr>
  <tr bgcolor="#000000">
    <td height="104" colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
