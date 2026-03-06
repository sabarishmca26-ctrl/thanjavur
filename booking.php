<?php

declare(strict_types=1);

$pageTitle = 'Thanjavur Trails | Booking';
$activePage = 'booking';
require __DIR__ . '/includes/header.php';
?>

<section class="reveal">
    <h1 class="section-title">Book Your Tour</h1>
    <p class="text-muted">Submit your travel details and our team will confirm with pricing and schedule.</p>
</section>

<section class="form-card reveal">
    <form method="post" action="actions/submit_booking.php">
        <label for="full_name">Full Name</label>
        <input id="full_name" name="full_name" type="text" required maxlength="120">

        <label for="email">Email</label>
        <input id="email" name="email" type="email" required maxlength="150">

        <label for="phone">Phone</label>
        <input id="phone" name="phone" type="text" required maxlength="25">

        <label for="tour_date">Tour Date</label>
        <input id="tour_date" name="tour_date" type="date" required>

        <label for="people_count">People Count</label>
        <input id="people_count" name="people_count" type="number" min="1" max="100" required>

        <label for="package_name">Package</label>
        <select id="package_name" name="package_name" required>
            <option value="">Select a package</option>
            <option value="Temple Heritage Trail">Temple Heritage Trail</option>
            <option value="Royal Palace Circuit">Royal Palace Circuit</option>
            <option value="Full Day Signature Tour">Full Day Signature Tour</option>
        </select>

        <label for="notes">Special Notes</label>
        <textarea id="notes" name="notes" rows="4" maxlength="1000"></textarea>

        <button type="submit">Submit Booking</button>
    </form>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
