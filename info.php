<?php 
    defined('INDEX') OR die('Прямой доступ к странице запрещён!');
?>

<html>
    <head>
        <style>
            body {
                background: #456b87;
            }
        </style>
    </head>
    <body>
        Здравствуйте <?=$data['name'];?>! <br>
        Ваша дата рождения: <?=$data['birth']?><br>
        <a href='index.php?q'>Выйти</a>
    </body>
</html>