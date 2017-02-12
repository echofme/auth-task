<?php 
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    
    require_once('db.php');

    function generateCode($length=6) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
        $code = "";

        $clen = strlen($chars) - 1;  
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];  
        }

        return $code;
    }
    
    if (isset($_POST['login']) && isset($_POST['password'])) {

        $data = $db->query("SELECT id, password FROM users WHERE login='?s' LIMIT 1", $_POST['login'])->fetch_assoc();
        if ($data['password'] === md5(md5($_POST['password']))) {

            //Генерируем случайное число и шифруем его
            $hash = md5(generateCode(10));

            //Записываем в БД новый хеш авторизации и IP
            $db->query("UPDATE users SET hash = '?s' WHERE id = ?i ", $hash, $data['id']);
        
            //Ставим куки
            setcookie("id", $data['id'], time()+60*60*24*30);
            setcookie("hash", $hash, time()+60*60*24*30);

            print "1";
        } else {
            print "Вы ввели неправильный логин или пароль.";
        }

    }