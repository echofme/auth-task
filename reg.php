<?php

    class RegistrationManager {

        const REGISTRATION_TIME = '20';

        private $maxLoginLength = 30;
        private $minLoginLength = 3;

        private $db;

        public $messages = [];


        public function __construct($db) {
            $this->db = $db;
        }

        public function insertUser($data) {
            $this->messages = [];

            $login = $data['login'];
            $password = md5(md5(trim($data['password'])));
            $name = $data['name'];
            $birth = $data['birth'];
            $ip = $_SERVER['REMOTE_ADDR'];
            

            if (!$this->allowRegistration($login)) return false;

            $result = $this->db->query("INSERT INTO users VALUES (?n, '?s', '?s', '?n', INET_ATON('?s'), '?s', '?s', '?i')", null, $login, $password, null, $ip, $name, $birth, time());

            if ($result) {
                return true;
            } else {
                $this->messages[] = "Ошибка регистрации";
                return false;
            }
        }   

        private function isExist($login) {
            $data = $this->db->query("SELECT id FROM users WHERE login = '?s'", $login);
            if ($data->getNumRows() > 0) {
                $this->messages[] = "Пользователь с таким логином уже существует в базе данных";
                return true;
            } else {
                return false;
            }
        }

        private function hasCorrectLength($login) {
            $loginLength = strlen($login);
            if ($loginLength < $this->minLoginLength || $loginLength > $this->maxLoginLength) {
                $this->messages[] = "Логин должен быть не меньше 3-х символов и не больше 30";
                return false;
            } else {
                return true;
            }
        } 

        private function hasCorrectSymbols($login) {
            if (!preg_match("/^[a-zA-Z0-9]+$/",$login)) {
                $this->messages[] = "Логин может состоять только из букв английского алфавита и цифр";
                return false;
            } else {
                return true;
            }
        }

        private function allowRegistration($login) {

            $this->hasCorrectLength($login);
            $this->hasCorrectSymbols($login);
            $this->isExist($login);

            $ip = $_SERVER['REMOTE_ADDR'];
            $lastRegTime = $this->db->query("SELECT MAX(reg_date) FROM users GROUP BY user_ip HAVING user_ip = INET_ATON('?s') LIMIT 1", $ip)->getOne();

            if (!empty($lastRegTime)) {
                if ($lastRegTime > (time() - self::REGISTRATION_TIME)) {
                    $this->messages[] = "Пожалуйста, попробуйте зарегистрироваться позже.";
                }
            }


            if (empty($this->messages)) return true;
            return false;
        }
        

        public function setLoginLength($min, $max) {
            $this->maxLoginLength = $max;
            $this->minLoginLength = $min;
        }
    }

    require_once('db.php');
    $RM = new RegistrationManager($db);

    $result = $RM->insertUser($_POST);
    if (!$result) {
        print implode('; ', $RM->messages);
    } else {
        echo 1;
    }