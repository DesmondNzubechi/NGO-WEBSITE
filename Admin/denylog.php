<?php
session_start();
if (!$_SESSION['id']) {
    # code...
    header('Location: login.php');
}

?>;