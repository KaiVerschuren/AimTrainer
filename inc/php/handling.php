<?php
include "dbconnect.php";

session_start();

function initSession() {
    if (!isset($_SESSION["userName"])) {
        $_SESSION["userName"] = 'guest';
    }
}

function isLoggedIn() {
    return !empty($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true;
}

function getUserName() {
    return $_SESSION["userName"];
}
