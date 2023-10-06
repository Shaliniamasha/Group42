<?php

$connection = mysqli_connect('localhost', 'root', '', 'Give4Good');

if (mysqli_connect_errno()) {
    die('Database connection failed ' . mysqli_connect_error());
}

?>
