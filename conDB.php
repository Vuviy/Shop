<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'magazin';

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
  echo 'sraka' . '<hr>';
}
session_start();
error_reporting(E_ALL & ~E_WARNING);
