<?php
$host = 'localhost';
$dbname = 'warehouse';
$username = 'root';
$password = '';

// Установка кодировки
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 