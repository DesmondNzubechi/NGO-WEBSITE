<?php
session_start();
if (!isset($_SESSION['id'])) {
    # code...
    header('Location: login.php');
}

?>;