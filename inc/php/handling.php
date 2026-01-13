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


function sendUserData(string $username, string $password) {
    if (!preg_match('/^[a-zA-Z0-9]{3,20}$/', $username)) {
        return false;
    }

    if (strlen($password) < 8) {
        return false;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $db = connectDB();

    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);

    $result = $stmt->execute();

    $stmt->close();
    $db->close();

    return $result;
}

function verifyUserData(string $username, string $password) {
    $db = connectDB();

    $stmt = $db->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();

    if ($stmt->num_rows === 0) {
        $stmt->close();
        $db->close();
        return false;
    }

    $isPasswordValid = password_verify($password, $hashedPassword);

    $stmt->close();
    $db->close();

    return $isPasswordValid;
}

function handleLogout() {
    $_SESSION['userName'] = 'guest';
    $_SESSION['loggedIn'] = false;
}
