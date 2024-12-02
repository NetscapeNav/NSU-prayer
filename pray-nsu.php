<?php
    /*include "../../../secret.php";
    if ($secret == false) {
        header("Location: ../../index.php");
    }*/
?>
<html>
    <head>
        <title>Онлайн-монастырь НГУ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
            #icon {
                height: 20vw;
            }
            a, p, pre, button {
                text-align: center;
            }
            a {
                font-family: Helvetica;
            }
            #count {
                font-family: 'Press Start 2P';
            }
            @media screen and (max-width: 600px) {
                #icon {
                    height: 40vw;
                }
                pre {
                    font-size: 8px;
                    margin: auto 10%;
                }
            }
        </style>
    </head>
    <body>
        <a href="18.php">← Назад</a>
        <p><img src="nsu-icon.png" id="icon"></p>
        <pre>
        Отче Наш, Иже еси на небесех!
        Да святится имя Твое,
        да приидет Царствие Твое,
        да будет воля Твоя,
        яко на небеси и на земли.
        Хлеб наш насущный даждь нам днесь;
        и остави нам долги наша,
        якоже и мы оставляем должником нашим;
        и не введи нас во искушение,
        но избави нас от лукаваго.
        Ибо Твое есть Царство и сила и слава во веки.</pre>
        <p><button type="button" id="like" onclick="updateCounter()">Я помолился_ась</button></p>
        <p id="count">Помолились: <output id="counter"></output></p>
        <script>
            function updateCounter() {
                fetch('counter.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'action=increment&department=all'
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('counter').textContent = data.counter;
                })
                .catch(error => console.error('Error:', error));
            }
    
            window.onload = function() {
                fetch('counter.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `department=all`
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('counter').textContent = data.counter;
                })
                .catch(error => console.error('Error:', error));
            }
        </script>
    </body>
</html>
