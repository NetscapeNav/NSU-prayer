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
	
	header("Content-Type: text/html");
	
	include("cfg.php");
	
	function usertimes() {
		global $timenewuser, $userfile;
		$userarray = file($userfile);
		
		for ($i = 0; $i < sizeof($userarray); $i++) {
			$explode = explode("|", $userarray[$i]);
			$time = $explode[1];
			if (time() > $time) {
				$changes = 1;
				$userarray[$i] = "";
			}
		}
		
		if (isset($changes)) {
			$fp = @fopen($userfile, "w");
			for ($i = 0; $i < sizeof($userarray); $i++) {
				@fwrite($fp, $userarray[$i]);
			}
			@fclose($fp);
		}
	}
	
	usertimes();
	$userarray = file($userfile);
	$votearray = file($votefile);
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
            body, div, td {
            	font-size: 12px;
            }
            p {
                font-size: 20px;
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
            <p>Количество поставивших</p>
            <p><a href="18.php">Вернуться</a></p>
            <p>
            <table border="0" cellpadding="3" cellspacing="0">
                <?php
                	$wmax = 150;
                	for ($i=1; $i<sizeof($votearray); $i++)
                	{
                		$explode = explode("|", $votearray[$i]);
                		$maxs[$i] = $explode[1]*$wmax;
                	}
                	$max = max($maxs);
                	if ($max > $wmax) $k = $wmax / $max; else $k = 1;
                	
                	for ($i=1; $i<sizeof($votearray); $i++)
                	{
                		$explode = explode("|", $votearray[$i]);
                ?>
                <tr>
                <td width="50%" align="right"><?=$explode[0]?></td>
                <td><img src="polosa.gif" width="<?php if(round($maxs[$i]*$k) == 0) echo "1"; else echo round($maxs[$i]*$k) ?>" height="9" border="0"> (<?=$explode[1]?>)</td>
                </tr>
                <?php
                	}
                ?>
            </table>
            </p>
            </td>
            </tr>
        </table>
    </body>
</html>