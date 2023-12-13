<?php

$host = 'http://localhost/sistema-gerenciamento/index.php';

$db_name = 'sistema';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
    $conn = mysqi_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
    throw $th;
}