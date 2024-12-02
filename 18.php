<?php
    /*include "../../../secret.php";
    if ($secret == false) {
        header("Location: ../../index.php");
    }*/
?>
<!doctype html>
<html>
    <head>
        <title>Онлайн-монастырь НГУ</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Orelega+One&display=swap');
            #post {
                font-family: 'Orelega One';
                font-size: ;
                position: absolute; 
                bottom: 0px;
                right: 0px;
                font-size: 16px !important;
            }
            html {
                background: url(mon.jpg) no-repeat center center;
                background-size:cover;
                min-height:100%;
            }
            body {
                text-align: center;
            }
            h1 {
                font-family: 'Orelega One';
                margin-top: 10%;
            }
            ul {
                list-style: none;
                margin-top: 15%;
                padding:0;
            }
            button {
                border: none;
                background-color: rgba(0,0,0,0);
            }
            a {
                font-size: 22px;
                font-family: 'Orelega One';
            }
            @media screen and (max-width: 600px) {
                ul {
                    margin-top: 40%;
                }
            }
        </style>
    </head>
    <body>
        <h1>Онлайн-монастырь НГУ</h1>
        <ul>
        <li><button><a href="pray.php">Помолиться</a></button></li><br/>
        <li><button><a href="icons.php">Иконы</a></button></li><br/>
        <li><button><a href="holy.php">Священные тексты</a></button></li><br/>
        <li><button><a href="candle.php">Поставить свечку</a></button></li>
        <li>
            <br/><iframe src="https://yoomoney.ru/quickpay/fundraise/button?billNumber=16R6MEF6ATM.241130&" width="320" height="47" frameborder="0" sum="30" allowtransparency="true" scrolling="no"></iframe></li>
        </ul>
        <p id="post"><em><b>Made at <a href="/index.php" style="font-size: 16px">SEP Technologies</a></b>, 2024</em></p>
    </body>
</html>