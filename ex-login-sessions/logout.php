<?php
    include 'sessions.php';
    logout();
    header('Location: login.php');
    exit;
?>