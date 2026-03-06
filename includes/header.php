<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$pageTitle = $pageTitle ?? 'Thanjavur Tourism';
$activePage = $activePage ?? '';
$successMessage = getFlash('success');
$errorMessage = getFlash('error');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="page-glow page-glow-left"></div>
    <div class="page-glow page-glow-right"></div>

    <header class="site-header">
        <nav class="navbar container">
            <a class="logo" href="index.php">Thanjavur Trails</a>
            <button class="menu-btn" id="menuBtn" aria-label="Open menu">Menu</button>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php" class="<?php echo $activePage === 'home' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="about.php" class="<?php echo $activePage === 'about' ? 'active' : ''; ?>">About</a></li>
                <li><a href="attractions.php" class="<?php echo $activePage === 'attractions' ? 'active' : ''; ?>">Attractions</a></li>
                <li><a href="booking.php" class="<?php echo $activePage === 'booking' ? 'active' : ''; ?>">Booking</a></li>
                <li><a href="contact.php" class="<?php echo $activePage === 'contact' ? 'active' : ''; ?>">Contact</a></li>
                <li><a href="admin/dashboard.php" class="admin-link">Admin</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <?php if ($successMessage !== null): ?>
            <div class="alert success"><?php echo e($successMessage); ?></div>
        <?php endif; ?>

        <?php if ($errorMessage !== null): ?>
            <div class="alert error"><?php echo e($errorMessage); ?></div>
        <?php endif; ?>
