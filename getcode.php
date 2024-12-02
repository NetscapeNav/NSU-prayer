<?php
    /*include "../../../secret.php";
    if ($secret == false) {
        header("Location: ../../index.php");
    }*/
?>
<?php
	# (c) 2005, Programming by InfMag
	# Author's email: infmag@yandex.ru
	# Author's ICQ: 320-215-083
	
	header("Content-Type: text/html; charset=windows-1251");
	
	include("cfg.php");
	
	$votearray = file($votefile);
?>
<html>
<head>
<!--
	(c) 2005, Programming by InfMag
	Author's email: infmag@yandex.ru
	Author's ICQ: 320-215-083
-->
<title>Код для размещения голосования</title>
<style type="text/css">
body, textarea
{
	background-color:#ffffff;
	color:#000000;
	font-family:Tahoma, Verdana, Geneva, Arial, Helvetica, sans-serif;
}
body, p, div, td, textarea
{
	font-size:12;
}
a
{
	text-decoration:none;
	color:#666666;
}
a:hover
{
	color:#0066cc;
}
</style>
</head>
<body bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">
<table border="0" cellpadding="50" cellspacing="0" width="100%" height="100%">
<tr>
<td align="center" valign="middle">
<p><font size="5">Код для размещения голосования</font></p>
<p><font size="4"><a href="<?php
	$fp = @fopen("homepage.txt", "r");
	echo @fread($fp, @filesize("homepage.txt"));
	@fclose($fp);
?>">Вернуться на сайт</a></font></p>
<p><textarea style="width: 400; height: 300" onClick="javascript:select(this);" readonly><!-- Система голосований -->
<form action="votes/vote.php" method="post">
<div align="center"><font size="2"><?=$votearray[0]?></font></div>
<table border="0" cellpadding="2" cellspacing="0" align="center">
<?php for ($i=1; $i<sizeof($votearray); $i++) { $explode = explode("|", $votearray[$i]) ?>
<tr>
<td align="center" valign="middle"><input type="radio" name="votenum" value="<?=$i?>"<?php if ($i==1) echo " checked" ?>></td>
<td align="left" valign="middle"><font size="2"><?=$explode[0]?></font></td>
</tr>
<?php } ?>
</table>
<div align="center"><input type="submit" name="vote" value="Проголосовать"></div>
<div align="center"><font size="1"><a href="votes/index.php"><b>Результаты</b></a></font></div>
</form>
<!-- Система голосований --></textarea></p>
</td>
</tr>
</table>
</body>
</html>