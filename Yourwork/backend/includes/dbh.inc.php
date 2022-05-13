<?php

define('DB_servername', 'localhost');
define('DB_username', 'root');
define('DB_password', '');
define('DB_name', 'yourwork-registration');

$conn = mysqli_connect(DB_servername, DB_username, DB_password, DB_name);

// Check connection

if (!$conn) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

