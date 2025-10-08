<?php
$products = [
    [
        "title" => "Chocolate Chip Cookie",
        "description" => "A timeless favorite — golden, chewy, and packed with rich chocolate chunks that melt in your mouth.",
        "price" => 129,
        "image" => "/assets/choco-chip.png"
    ],
    [
        "title" => "Oatmeal Raisin Cookie",
        "description" => "Soft, spiced, and filled with plump raisins and hearty oats — the perfect cozy comfort treat.",
        "price" => 119,
        "image" => "/assets/oatmeal.jpg"
    ],
    [
        "title" => "Double Fudge Cookie",
        "description" => "For the true chocolate lover — deeply rich, gooey, and irresistibly indulgent.",
        "price" => 139,
        "image" => "/assets/fudge.png"
    ]
];
?>

<section style="background:white;padding:60px 20px;text-align:center;color:#4A2E05;">
    <h2 style="font-family:'Pacifico',cursive;font-size:2.5rem;margin-bottom:40px;">Our Best Sellers</h2>
    <div style="display:flex;justify-content:center;gap:25px;flex-wrap:wrap;">
        <?php foreach ($products as $product): ?>
            <div style="background:#FFF9F3;border:1px solid #E9C46A;border-radius:15px;padding:20px;width:280px;box-shadow:0 3px 8px rgba(0,0,0,0.1);">
                <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['title']) ?>"
                    style="width:100%;height:200px;object-fit:cover;border-radius:10px;margin-bottom:15px;">
                <h3 style="font-family:'Montserrat',sans-serif;font-size:1.4rem;margin-bottom:10px;">
                    <?= htmlspecialchars($product['title']) ?>
                </h3>
                <p style="font-family:'Montserrat',sans-serif;font-size:0.95rem;margin-bottom:10px;">
                    <?= htmlspecialchars($product['description']) ?>
                </p>
                <strong style="font-family:'Montserrat',sans-serif;font-size:1rem;display:block;margin-bottom:10px;">
                    ₱<?= htmlspecialchars($product['price']) ?>
                </strong>
            </div>
        <?php endforeach; ?>
    </div>
</section>