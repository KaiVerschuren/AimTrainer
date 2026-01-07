<?php

function connectDB()
{
    $mysqli = new mysqli("localhost", "root", "", "aimtrainer");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    return $mysqli;
}
