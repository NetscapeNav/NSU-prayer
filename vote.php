<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    /*include "../../../secret.php";
    if ($secret == false) {
        header("Location: ../../index.php");
    }*/
?>
<?php
	
	header("Content-Type: text/html; charset=utf-8");
	
	include("cfg.php");
	
	function getip() {
		if ($ip = getenv("HTTP_CLIENT_IP")) {
			return $ip;
		}
		if ($ip = getenv("HTTP_X_FORWARDED_FOR")) {
			if ($ip == '' || $ip == "unknown") {
				$ip = getenv("REMOTE_ADDR");
			}
			return $ip;
		}
		if ($ip = getenv("REMOTE_ADDR")) {
			return $ip;
		}
	}
	
	function addme(){
        global $timenewuser, $userfile;
        $fp = @fopen($userfile, "a");
        if ($fp) {
            @fwrite($fp, getip() . "|" . (time() + $timenewuser) . "|\n");
            @fclose($fp);
        }
    }
	
	/*function findme() {
		global $userfile;
		$userarray = file($userfile);
		
		for ($i=0; $i<sizeof($userarray); $i++) {
			$explode = explode("|", $userarray[$i]);
			if ($explode[0] == getip()) {
				return true;
			}
		}
		
		return false;
	}*/
	
	function errortohtml($message) {
?>
<html>
    <head>
        <title>Онлайн-монастырь НГУ</title>
        <style type="text/css">
            body {
            	background-color: #ffffff;
            	color: #000000;
            	font-family: Tahoma, Verdana, Geneva, Arial, Helvetica, sans-serif;
            }
            body, p, div, td {
            	font-size: 12;
            }
            a {
            	text-decoration: none;
            	color: #666666;
            }
            a:hover {
            	color: #0066cc;
            }
        </style>
    </head>
    <body bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">
        <table border="0" cellpadding="50" cellspacing="0" width="100%" height="100%">
        <tr>
        <td align="center" valign="middle">
        <p>Ошибка!</p>
        <p><a href="18.php">Вернуться на сайт</a></p>
        <p><?=$message?></p>
        </td>
        </tr>
        </table>
    </body>
</html>
<?php
	}
	
	if (isset($_POST['vote']) && isset($_POST['votenum'])) {
		$votearray = file($votefile);
		
		/*if (findme())
		{
			$fp = @fopen("homepage.txt", "r");
			$toback = @fread($fp, @filesize("homepage.txt"));
			@fclose($fp);
			header("Refresh: 10; url=$toback");
			echo errortohtml("Вы уже ставили свечку!<br>Нельзя ставить свечку больше одного раза в неделю!");
			exit();
		}*/
		
		$fp = @fopen($votefile, "w");
		for ($i = 0; $i < sizeof($votearray); $i++) {
			if ($i == $_POST['votenum']) {
				$explode = explode("|", $votearray[$i]);
				$explode[1]++;
				@fwrite($fp, "$explode[0]|$explode[1]|\n");
			} else {
				@fwrite($fp, $votearray[$i]);
			}
		}
		@fclose($fp);
		addme();
	}
	header("Location: index.php");
?>