<?php
include 'inc/php/layout.php';

initSession();

top("Trainer");

if (isLoggedIn()) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = verifyUserData($username, $password);
    if ($result) {
        $_SESSION['userName'] = $username;
        $_SESSION['loggedIn'] = true;

        $_SESSION['notification'] = 'success';
        $_SESSION['message'] = 'Signup successful. You are now logged in.';

        header("Location: index.php");
        exit();
    } else {
        $_SESSION['notification'] = 'error';
        $_SESSION['message'] = 'Signup failed. Please check your input and try again.';
    }
}

?>
<main class="container">
    <form action="" method="post">
        <div class="form-login-wrapper">
            <input type="text" class="input" placeholder="Username" name="username" minlength="3" maxlength="20" required>
            <input type="password" class="input" placeholder="Password" name="password" minlength="8" required>
            <a href="login.php" class="form-link">Log In</a>
            <input type="submit" class="btnPrimary form-button" value="Sign Up">
        </div>
    </form>
</main>

<?php

bottom();
