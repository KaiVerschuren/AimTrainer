<?php
include 'inc/php/handling.php';

initSession();

if (!isLoggedIn()) {
    header("Location: index.php");
    exit();
}

handleLogout();

$_SESSION['notification'] = 'success';
$_SESSION['message'] = 'You have been logged out successfully.';

header("Location: index.php");
exit();
