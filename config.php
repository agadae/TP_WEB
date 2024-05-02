<?php
//Create session per user:
session_start();

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');


define('DB_NAME', 'weblog');
define('DB_USER', 'admin');
define('DB_PASS', 'password');

// connect to database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//var_dump($conn);
//$conn = new Database();

//define some constants:
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost:2024/');

