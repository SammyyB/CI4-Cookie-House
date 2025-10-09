<?php
$roadmapItems = [
    [
        "title" => "User Management",
        "description" => "Handles customer sign-ups, employee registration by admins, and secure access for both staff and customers. Includes profile viewing and account editing features.",
        "status" => "Completed",
        "priority" => "High",
        "statusClass" => "bg-green" // Green
    ],
    [
        "title" => "Service Management",
        "description" => "Enables the admin to add, update, or remove cookie flavors and combo sets. Keeps the online menu updated with new products, stock levels, and prices.",
        "status" => "In Progress",
        "priority" => "High",
        "statusClass" => "bg-orange" // Orange
    ],
    [
        "title" => "Order & Tracking System",
        "description" => "Lets customers place cookie orders and track them in real-time through stages: Pending, Baking, Ready, and Completed. Admins can update progress and handle cancellations.",
        "status" => "In Progress",
        "priority" => "High",
        "statusClass" => "bg-orange" // Orange
    ],
    [
        "title" => "Account Control & Deactivation",
        "description" => "Allows both users and admins to update or deactivate accounts securely to ensure safe and managed user data handling.",
        "status" => "Planned",
        "priority" => "Medium",
        "statusClass" => "bg-blue" // Blue
    ],
    [
        "title" => "Cookie Tracking Analytics",
        "description" => "Tracks and visualizes completed and ongoing cookie orders to help monitor workflow efficiency and popular cookie flavors.",
        "status" => "Planned",
        "priority" => "Medium",
        "statusClass" => "bg-blue" // Blue
    ],
    [
        "title" => "Feedback & Review Feature",
        "description" => "Lets customers leave ratings and comments after receiving their cookies, giving admins insights for product improvements.",
        "status" => "Backlog",
        "priority" => "Low",
        "statusClass" => "bg-purple" // Purple
    ],
];
?>

<div class="roadmap-container">
    <?php foreach ($roadmapItems as $item): ?>
        <div class="roadmap-cards">
            <div class="flex">
                <h2><?= htmlspecialchars($item['title']) ?></h2>
                <span class="status <?= htmlspecialchars($item['statusClass']) ?>">
                    <?= htmlspecialchars($item['status']) ?>
                </span>
            </div>
            <p><?= htmlspecialchars($item['description']) ?></p>
            <p class="priority">Priority: <?= htmlspecialchars($item['priority']) ?></p>
        </div>
    <?php endforeach; ?>
</div>