<?php
    function login($email, $password) {
        $user = [];
        $user['email'] = $_COOKIE['email'] ?? null;
        $user['password'] = $_COOKIE['password'] ?? null;
        setcookie('email', $email, time() + 480, '/', '', false, true);
        setcookie('password', $password, time() + 480, '/', '', false, true);

        return $user;
    }

    function logout() {
        setcookie('email', '', time() - 3600, '/', '', false, true);
        setcookie('password', '', time() - 3600, '/', '', false, true);
    }
?>