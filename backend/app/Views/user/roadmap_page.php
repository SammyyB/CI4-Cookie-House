<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Crumbs Cookie House | Road Map</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Scoped only for this page */
        body.roadmap-page {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background: #fff8f0;
            color: #333;
        }

        .roadmap-header {
            background: #5c3d2e;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .roadmap-header img {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .roadmap-header span {
            font-family: 'Pacifico', cursive;
            font-size: 1.8rem;
            vertical-align: middle;
        }

        .roadmap-nav {
            background: #e2c2a2;
            padding: 10px;
            text-align: center;
        }

        .roadmap-nav a {
            color: #5c3d2e;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
        }

        .roadmap-main {
            padding: 30px;
        }

        .roadmap-main h1,
        .roadmap-main h2 {
            color: #5c3d2e;
        }

        .crud-section {
            margin-bottom: 30px;
        }

        .crud-section h2 {
            margin-bottom: 10px;
            border-bottom: 2px solid #e2c2a2;
            padding-bottom: 5px;
        }

        .crud-section ul {
            list-style: none;
            padding: 0;
        }

        .crud-section ul li {
            background: #f4e1d2;
            margin: 5px 0;
            padding: 8px 12px;
            border-radius: 8px;
        }

        .summary {
            background: #fff3e0;
            border-left: 5px solid #e2c2a2;
            padding: 10px 15px;
            margin-top: 10px;
            border-radius: 8px;
            font-style: italic;
        }

        .roadmap-footer {
            background: #5c3d2e;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .roadmap-footer img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 8px;
        }
    </style>
</head>

<body class="roadmap-page">

    <header style="background:#6B4226; padding:25px 0; text-align:center; color:white; box-shadow:0 3px 6px rgba(0,0,0,0.2);">
        <div style="display:flex;align-items:center;justify-content:center;gap:20px;flex-wrap:wrap;">
            <img src="assets/logo.png" alt="Golden Crumbs Cookie House Logo" style="height:80px;width:80px;border-radius:50%;border:3px solid #E9C46A;">
            <div>
                <h1 style="font-family:'Pacifico',cursive;font-size:2.5rem;margin:0;">Golden Crumbs Cookie House 🍪</h1>
                <p style="font-family:'Montserrat',sans-serif;font-size:1rem;margin:5px 0 0 0;letter-spacing:1px;">Freshly Baked Happiness Every Day</p>
            </div>
        </div>
    </header>

    <nav class="roadmap-nav">
        <a href="/">Home</a>
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
        <a href="/moodboard">Mood Board</a>
        <a href="/roadmap">Road Map</a>
    </nav>

    <main class="roadmap-main">
        <h1>System Road Map</h1>

        <section class="crud-section">
            <h2>USER</h2>
            <ul>
                <li>CREATE → Customers can sign up / Admin adds new employees</li>
                <li>READ → Admin views user list / Customers view profile</li>
                <li>UPDATE → Admin or user updates account info</li>
                <li>DELETE → Accounts can be deactivated by user or admin</li>
            </ul>
            <div class="summary">
                The user module ensures that both customers and staff have secure access and profile control within the Golden Crumbs Cookie House system.
            </div>
        </section>

        <section class="crud-section">
            <h2>SERVICE</h2>
            <ul>
                <li>CREATE → Admin adds new cookie flavors or combo sets</li>
                <li>READ → Customers view cookie menu and descriptions</li>
                <li>UPDATE → Admin updates prices, stock, and descriptions</li>
                <li>DELETE → Admin removes discontinued cookie items</li>
            </ul>
            <div class="summary">
                The service module manages all cookie-related offerings, ensuring the shop’s digital menu stays up-to-date with customer favorites and new releases.
            </div>
        </section>

        <section class="crud-section">
            <h2>ORDER & TRACKING</h2>
            <ul>
                <li>CREATE → Customer places a cookie order</li>
                <li>READ → Admin and user view order status (Pending, Baking, Ready, Completed)</li>
                <li>UPDATE → Admin updates progress as cookies move through stages</li>
                <li>DELETE → Admin or customer cancels orders before completion</li>
                <li>TRACKING → Each order has a progress tracker with completion status</li>
            </ul>
            <div class="summary">
                The order and tracking module provides real-time updates for customers, showing when cookies are being baked, packed, or completed for pickup or delivery.
            </div>
        </section>
    </main>

    <footer>
        <div style="display:flex;align-items:center;justify-content:center;gap:10px;flex-wrap:wrap;">
            <img src="assets/logo.png" alt="Golden Crumbs Logo" style="height:40px;width:40px;border-radius:50%;">
            <span>© 2025 Golden Crumbs Cookie House |
                <a href="#">About</a> |
                <a href="#">Contact</a> |
                <a href="#">Privacy</a>
            </span>
        </div>
    </footer>

</body>

</html>