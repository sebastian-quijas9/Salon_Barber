<?php
if (!extension_loaded('mysqli')) {
    die('La extensión MySQLi no está habilitada.');
}

$db = mysqli_connect('localhost', 'root', '', 'appsalon');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}