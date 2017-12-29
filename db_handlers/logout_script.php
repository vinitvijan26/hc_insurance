<?php
/** Include the database connection File */
require_once(__DIR__."/../globals.php");


session_start();
$index_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SESSION['curr_page'];//dirname($_SERVER['PHP_SELF']) . '/../index.php';
session_destroy();
header('Location: ' . $index_url);

?>