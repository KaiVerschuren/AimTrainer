<?php
include 'inc/php/layout.php';

initSession();

top("Trainer");

?>
<main class="container">
    <form action="">
        <div class="form-login-wrapper">
            <input type="text" class="input" placeholder="Username">
            <input type="text" class="input" placeholder="Password">
            <input type="submit" class="btnPrimary form-button">
        </div>
    </form>
</main>

<?php

bottom();
