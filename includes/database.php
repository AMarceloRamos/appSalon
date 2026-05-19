<?php

$db = mysqli_connect('localhost', 'root', 'admin1234', 'appsalon');

if (!$db) {
    error_log(mysqli_connect_error());
    die("Error interno del servidor");
}