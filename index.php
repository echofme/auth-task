<?php

    define('INDEX', '');
    require_once('db.php');

    function setDefaultCookie() {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/");
    }

    if (isset($_GET['q'])) {
        setDefaultCookie();
    } else {
        if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {   
            $data = $db->query("SELECT *, INET_NTOA(user_ip) as user_ip FROM users WHERE id = '?i' LIMIT 1", $_COOKIE['id'])->fetch_assoc();

            if (($data['hash'] !== $_COOKIE['hash']) || (($data['user_ip'] !== $_SERVER['REMOTE_ADDR']) and ($data['user_ip'] !== "0"))) {
                setDefaultCookie();
            } else {
                require_once('info.php'); exit();
            }
        } 
    }
    require_once('auth_form.php');
