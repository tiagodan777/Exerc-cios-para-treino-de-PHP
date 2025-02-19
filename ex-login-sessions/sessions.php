<?php
    session_start();
    $logged_id = $_SESSION['logged_id'] ?? null;

    function login() {
        session_regenerate_id(true);
        $_SESSION['logged_id'] = true;
        header('Location: account.php');
        exit;
    }

    function logout() {
        $_SESSION = [];

        $params = session_get_cookie_params();

        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

        session_destroy();
    }

    function require_login($logged_id) {
        if (!$logged_id) {
            header('Location: login.php');
            exit;
        }
    }

    function is_logged_in($logged_id) {
        if ($logged_id) {
            header('Location: account.php');
            exit;
        }
    }
?>