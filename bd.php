<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "test_api";
$db = new PDO("mysql:host={$hostname};dbname={$database};charset=utf8",$username,$password);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>