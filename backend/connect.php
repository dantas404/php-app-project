<?php

$servername = 'mysql-connection';
$username = 'root';
$password = 'password1235';
$database = 'bank';

$link = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_error()){
    printf('Connect failed: %s\n', mysqli_connect_error());
    exit();
}

?>
