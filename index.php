<?php
$members = [
    [
        'name' => 'John Wilfred Tolentino',
        'role' => 'Mother',
        'image' => 'images/image_1.jpg',
        'profile' => 'https://www.facebook.com/mikky.tolentino28?mibextid=ZbWKwLl'
    ],
    [
        'name' => 'Romelyn Samillano',
        'role' => 'Representative',
        'image' => 'images/image_2.jpg',
        'profile' => 'https://www.facebook.com/romelyn.samillano1994?mibextid=ZbWKwL'
    ],
    [
        'name' => 'Karen Claire Abdon',
        'role' => 'Member',
        'image' => 'images/image_3.jpg',
        'profile' => 'https://www.facebook.com/karenclaire.abdon?mibextid=ZbWKwL'
    ],
    [
        'name' => 'Alynna Mae Sanchez',
        'role' => 'Member',
        'image' => 'images/image_4.jpg',
        'profile' => 'https://www.facebook.com/alynnamae.sanchez?mibextid=ZbWKwL'
    ],
    [
        'name' => 'Justine Mae Añonuevo',
        'role' => 'Member',
        'image' => 'images/image_5.jpg',
        'profile' => 'https://www.facebook.com/justine26.anonuevo?mibextid=ZbWKwL'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 7 Team Page</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header class="header">
        <h1>Group 7 Members</h1>
    </header>

    <div class="container">
        <div class="team">
            <?php foreach ($members as $member): ?>
            <div class="team-member">
                <img src="<?= htmlspecialchars($member['image']); ?>" alt="<?= htmlspecialchars($member['name']); ?>">
                <h3><?= htmlspecialchars($member['name']); ?></h3>
                <p><?= htmlspecialchars($member['role']); ?></p>
                <a href="<?= htmlspecialchars($member['profile']); ?>" class="btn-readmore">View Profile</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <a href="about.php" class="section-heading">About Group 7 Members</a>

    <script src="script.js"></script>
</body>

</html>
