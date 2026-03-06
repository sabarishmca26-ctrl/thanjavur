<?php

declare(strict_types=1);

$pageTitle = 'Thanjavur Trails | Home';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
?>

<section class="hero reveal">
    <div>
        <h1>Walk Through the Living Cinema of Chola Heritage</h1>
        <p>
            Thanjavur is not just a destination. It is a stage of temples, bronze craft, classical rhythms, and timeless streets.
            Build your own immersive itinerary with local experts.
        </p>
        <p>
            <a class="btn" href="booking.php">Plan My Journey</a>
            <a class="btn btn-alt" href="attractions.php">View Attractions</a>
        </p>
    </div>
    <aside class="hero-card">
        <h2>Experience Snapshot</h2>
        <p class="text-muted">Every route is curated for pace, story, and visual richness.</p>
        <div class="hero-stats">
            <div class="hero-stat"><strong>28+</strong><span>Sites</span></div>
            <div class="hero-stat"><strong>12</strong><span>Curated Tours</span></div>
            <div class="hero-stat"><strong>4.9</strong><span>Guest Rating</span></div>
        </div>
    </aside>
</section>

<section class="reveal">
    <h2 class="section-title">Why Travelers Choose Us</h2>
    <div class="cards">
        <article class="card">
            <h3>Story-First Guides</h3>
            <p>Guides who connect architecture, history, and culture in an engaging style.</p>
        </article>
        <article class="card">
            <h3>Flexible Bookings</h3>
            <p>Private, family, and student-friendly packages with simple confirmation flow.</p>
        </article>
        <article class="card">
            <h3>Local Partnerships</h3>
            <p>Trusted tie-ups with artisans, transport teams, and heritage hosts.</p>
        </article>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
