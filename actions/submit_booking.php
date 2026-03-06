<?php

declare(strict_types=1);

require_once __DIR__ . '/../includes/helpers.php';
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../booking.php');
    exit;
}

$fullName = trim((string) ($_POST['full_name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$tourDate = trim((string) ($_POST['tour_date'] ?? ''));
$peopleCount = (int) ($_POST['people_count'] ?? 0);
$packageName = trim((string) ($_POST['package_name'] ?? ''));
$notes = trim((string) ($_POST['notes'] ?? ''));

if ($fullName === '' || $email === '' || $phone === '' || $tourDate === '' || $peopleCount < 1 || $packageName === '') {
    setFlash('error', 'Please fill all required booking fields.');
    header('Location: ../booking.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setFlash('error', 'Invalid email format.');
    header('Location: ../booking.php');
    exit;
}

try {
    $db = getDbConnection();
    $stmt = $db->prepare(
        'INSERT INTO bookings (full_name, email, phone, tour_date, people_count, package_name, notes) VALUES (:full_name, :email, :phone, :tour_date, :people_count, :package_name, :notes)'
    );

    $stmt->execute([
        ':full_name' => $fullName,
        ':email' => $email,
        ':phone' => $phone,
        ':tour_date' => $tourDate,
        ':people_count' => $peopleCount,
        ':package_name' => $packageName,
        ':notes' => $notes,
    ]);

    setFlash('success', 'Booking request submitted successfully. We will contact you soon.');
} catch (Throwable $exception) {
    setFlash('error', 'Could not save booking. Check database setup in XAMPP.');
}

header('Location: ../booking.php');
exit;
