<?php
include("handling.php");

function top($pageTitle)
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sixtyfour&display=swap" rel="stylesheet">
        <title><?= $pageTitle ?></title>
    </head>

    <body class="container">
        <header>
            <div class="header-title">
                Aim Trainer
            </div>
            <nav class="header-nav">
                <ul class="noStyleUL header-ul">
                    <li>
                        <a href="index.php">
                            Trainer
                        </a>
                    </li>
                    <li>
                        |
                    </li>
                    <li>
                        <a href="leaderboard.php">
                            Leaderboard
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="header-account">
                <?php if (isLoggedIn()) {
                ?>
                    <button class="btnSecondary">Log Out</button>
                <?php
                } else {
                ?>
                    <button class="btnPrimary">Login</button>
                <?php
                } ?>
            </div>
        </header>
    <?php
}

function bottom()
{
    if (isset($_SESSION['notification'])) {
        notification($_SESSION['notification']);
        unset($_SESSION['notification']);
        unset($_SESSION['message']);
    }
    ?>
        <footer>

        </footer>
        <script defer src="./inc/js/notification.js"></script>
    </body>

    </html>
<?php
}

function notification($type)
{
    $colors = [
        'success' => '#22c55e',
        'warning' => '#f59e0b',
        'error' => '#ef4444',
        'info' => '#3b82f6'
    ];
?>
    <div class="notification" style="border: 1px solid <?= $colors[$type]; ?>;">
        <div class="notification-start">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="<?= $colors[$type]; ?>" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
            </svg>
        </div>
        <div class="notification-content" style="color: <?= $colors[$type]; ?>;">
            <?= $_SESSION['message']; ?>
        </div>
        <div class="notification-end">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="<?= $colors[$type]; ?>" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
    </div>
<?php
}
