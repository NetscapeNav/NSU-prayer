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
            #plea {
                margin: auto 20%;
                font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
            }
            #count {
                font-family: 'Press Start 2P';
            }
            a, p, pre, button {
                text-align: center;
            }
            a {
                font-family: Helvetica;
            }
            @media screen and (max-width: 600px) {
                #icon {
                    height: 40vw;
                }
                #plea {
                    font-size: 6px;
                }
            }
        </style>
    </head>
    <body>
        <a href="18.php">← Назад</a>
        <p><img src="irtegov-icon.png" id="icon"></p>
        <p id="plea" style="text-align: center;">...<a href="tome.pdf">The sea coconut (coco de mer) palm tree (photo on the front page)</a> under which the idea of the CdM-8 architecture was conceived by the first author, and which provided critical cooling at the conception stage, is gratefully acknowledged. He is indebted to Carl Burch, who wrote the Logisim circuit simulator – a free tool, which was invaluable for his implementation of the Level 2 platform, which in turn enabled his work on the programming system and automated assessment software for an undergraduate module of platform architecture. The influence of the School leadership, who did not wish this to be yet another course in architecture, is also acknowledged with heartfelt thanks; the course has turned out to be broader and better than the original plan. The key role in converting these disparate thoughts and designs into a product was played by other members of the Computing Platforms team (module 4com1042). We are grateful to Bob Dickerson for advancing what we have dubbed the Dickerson Principle (start in the middle of the Tanenbaum hierarchy, go down to the transistor level, and up to the OS user interface), which we have enthusiastically embraced, we acknowledge the tireless work of Dr Raimund Kirner, who checked all online design exercises with their automatic marking procedures and who proposed new ones. He also found errors and inconsistencies, which have since been rectified. Thanks are also due to Dr Mick Walters for his assistance with placing and configuring the programming tools and packaging them together with a specialised text editor, which effectively turned them into an IDE.</p>

        <p><button type="button" id="like" onclick="updateCounter()">Я помолился_ась</button></p>
        <p id="count">Помолились: <output id="counter"></output></p>

<script>
        function updateCounter() {
            fetch('counter.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'action=increment&department=it'
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
                body: `department=it`
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