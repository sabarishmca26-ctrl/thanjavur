<?php

declare(strict_types=1);

require_once __DIR__ . '/../includes/helpers.php';
require_once __DIR__ . '/../config/database.php';

$bookings = [];
$messages = [];
$error = null;

try {
    $db = getDbConnection();

    $bookingStmt = $db->query('SELECT id, full_name, email, phone, tour_date, people_count, package_name, created_at FROM bookings ORDER BY id DESC LIMIT 20');
    $bookings = $bookingStmt->fetchAll();

    $messageStmt = $db->query('SELECT id, name, email, subject, created_at FROM contact_messages ORDER BY id DESC LIMIT 20');
    $messages = $messageStmt->fetchAll();
} catch (Throwable $exception) {
    $error = 'Database not connected. Import data/schema.sql in phpMyAdmin and verify config/database.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Thanjavur Trails</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="page-glow page-glow-left"></div>
    <div class="page-glow page-glow-right"></div>

    <header class="site-header">
        <nav class="navbar container">
            <a class="logo" href="../index.php">Thanjavur Trails</a>
            <ul class="nav-links" style="display:flex;">
                <li><a href="../index.php">Back To Site</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <h1 class="section-title">Admin Dashboard</h1>

        <?php if ($error !== null): ?>
            <div class="alert error"><?php echo e($error); ?></div>
        <?php endif; ?>

        <section class="reveal">
            <h2>Latest Bookings</h2>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>People</th>
                            <th>Package</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $row): ?>
                            <tr>
                                <td><?php echo e((string) $row['id']); ?></td>
                                <td><?php echo e((string) $row['full_name']); ?></td>
                                <td><?php echo e((string) $row['email']); ?></td>
                                <td><?php echo e((string) $row['phone']); ?></td>
                                <td><?php echo e((string) $row['tour_date']); ?></td>
                                <td><?php echo e((string) $row['people_count']); ?></td>
                                <td><?php echo e((string) $row['package_name']); ?></td>
                                <td><?php echo e((string) $row['created_at']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="reveal">
            <h2>Latest Contact Messages</h2>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($messages as $row): ?>
                            <tr>
                                <td><?php echo e((string) $row['id']); ?></td>
                                <td><?php echo e((string) $row['name']); ?></td>
                                <td><?php echo e((string) $row['email']); ?></td>
                                <td><?php echo e((string) $row['subject']); ?></td>
                                <td><?php echo e((string) $row['created_at']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="../assets/js/main.js"></script>
</body>
</html>
