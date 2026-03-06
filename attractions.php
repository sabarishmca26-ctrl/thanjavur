<?php

declare(strict_types=1);

require_once __DIR__ . '/config/database.php';

$pageTitle = 'Thanjavur Trails | Attractions';
$activePage = 'attractions';

$attractions = [];

try {
    $db = getDbConnection();
    $stmt = $db->query('SELECT name, category, short_description FROM attractions ORDER BY id DESC');
    $attractions = $stmt->fetchAll();
} catch (Throwable $exception) {
    $attractions = [
        [
            'name' => 'Brihadeeswarar Temple',
            'category' => 'UNESCO Heritage',
            'short_description' => 'A monumental Chola temple known for scale, symmetry, and stone artistry.',
        ],
        [
            'name' => 'Thanjavur Royal Palace',
            'category' => 'History',
            'short_description' => 'A layered complex of halls, museum spaces, and archival galleries.',
        ],
        [
            'name' => 'Saraswathi Mahal Library',
            'category' => 'Literature',
            'short_description' => 'Ancient manuscripts and palm-leaf collections preserving regional knowledge.',
        ],
    ];
}

require __DIR__ . '/includes/header.php';
?>

<section class="reveal">
    <h1 class="section-title">Attractions</h1>
    <p class="text-muted">Heritage landmarks and local gems you can include in your travel plan.</p>
</section>

<section class="cards reveal">
    <?php foreach ($attractions as $item): ?>
        <article class="card">
            <h3><?php echo e((string) $item['name']); ?></h3>
            <p><strong>Category:</strong> <?php echo e((string) $item['category']); ?></p>
            <p><?php echo e((string) $item['short_description']); ?></p>
        </article>
    <?php endforeach; ?>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
