<?php

declare(strict_types=1);

$pageTitle = 'Thanjavur Trails | Contact';
$activePage = 'contact';
require __DIR__ . '/includes/header.php';
?>

<section class="grid-two reveal">
    <article class="card">
        <h2 class="section-title">Reach Our Team</h2>
        <p class="text-muted">Have questions about routes, pricing, or custom cultural plans? Send us a message.</p>
        <p><strong>Phone:</strong> +91 7200354947</p>
        <p><strong>Email:</strong> raviprasath437@gmail.com</p>
        <p><strong>Office:</strong> East Main Street, Thanjavur</p>
    </article>

    <article class="form-card">
        <form method="post" action="actions/submit_contact.php">
            <label for="name">Name</label>
            <input id="name" name="name" type="text" required maxlength="120">

            <label for="email">Email</label>
            <input id="email" name="email" type="email" required maxlength="150">

            <label for="subject">Subject</label>
            <input id="subject" name="subject" type="text" required maxlength="180">

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" required maxlength="2000"></textarea>

            <button type="submit">Send Message</button>
        </form>
    </article>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
