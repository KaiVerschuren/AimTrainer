<?php
include "dbconnect.php";

session_start();

function isLoggedIn() {
    return !empty($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true;
}
