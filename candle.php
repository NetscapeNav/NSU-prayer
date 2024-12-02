<?php
    /*include "../../../secret.php";
    if ($secret == false) {
        header("Location: ../../index.php");
    }*/
?><html>
    <head>
        <title>Онлайн-монастырь НГУ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
            * {
                font-family: Roboto Slab;
                font-size: 21px;
            }
            textarea {
                text-align: center;
            }
            form {
                margin-top: 2.5%;
                text-align: center;
            }
            p, a {
                font-size: 17px;
            }
            p {
                margin-bottom: 0;
            }
            a {
                margin-top: 0;
                margin-bottom: 14px;
            }
            
        </style>
    </head>
    <body>
        <a href="18.php">← Назад</a>
        <!-- Система голосований -->
        <form action="vote.php" method="post">
            <div align="center">За что поставить свечку?</div>
            <table border="0" cellpadding="2" cellspacing="0" align="center">
                <tr>
                    <td align="center"><input type="radio" name="votenum" value="1" checked></td>
                    <td align="left">За упокой </td>
                </tr>
                <tr>
                    <td align="center"><input type="radio" name="votenum" value="2"></td>
                    <td align="left">За здравие </td>
                </tr>
                <tr>
                    <td align="center"><input type="radio" name="votenum" value="3"></td>
                    <td align="left">За детей </td>
                </tr>
                <tr>
                    <td align="center"><input type="radio" name="votenum" value="5"></td>
                    <td align="left">За то, чтобы сгорел вуз </td>
                </tr>
                <tr>
                    <td align="center"><input type="radio" name="votenum" value="6"></td>
                    <td align="left">За родственников </td>
                </tr>
                <tr>
                    <td align="center"><input type="radio" name="votenum" value="7"></td>
                    <td align="left">За good оценки </td>
                </tr>
                <tr>
                    <td align="center"><input type="radio" name="votenum" value="8"></td>
                    <td align="left">Просто поставить свечку </td>
                </tr>
                <tr>
                    <td align="center"><input type="radio" name="votenum" value="9"></td>
                    <td align="left">Другое </td>
                </tr>
            </table>
            <textarea placeholder="Напишите за что вы хотите поставить свечку"></textarea>
            <div align="center"><input type="submit" name="vote" value="Поставить"></div>
            <div align="center"><p size="1"><a href="index.php"><b>Результаты</b></a></p></div>
        </form>
        <p style="font-family:Helvetica; margin:auto 20%; font-size: 50%; text-align: center;">Если вы решили вписать в текстовое поле за что вы хотите поставить свечку, то помните, что никто (кроме Них) не может посмотреть за что вы поставили свечку</p>
    </body>
</html>