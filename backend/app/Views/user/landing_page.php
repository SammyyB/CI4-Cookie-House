<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Crumbs Cookie House | Home</title>
    <link rel="stylesheet" href="/assets/styles.css">
    <link rel="shortcut icon" type="image/png" href="assets/logo-favico.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <?= view('components/header') ?>

    <nav>
        <a href="/">Home</a>
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
        <a href="/moodboard">Mood Board</a>
        <a href="/roadmap">Road Map</a>
    </nav>

    <section class="hero" style="background:#F9E8C9;padding:80px 20px;text-align:center;color:#4A2E05;">
        <h1 style="font-family:'Pacifico',cursive;font-size:3rem;margin-bottom:10px;">Freshly Baked Happiness</h1>
        <p style="font-family:'Montserrat',sans-serif;font-size:1.2rem;margin-bottom:25px;max-width:600px;margin-left:auto;margin-right:auto;">
            Welcome to <b>Golden Crumbs Cookie House</b> — your cozy destination for warm, gooey cookies made with love.
        </p>
        <div style="display:flex;justify-content:center;gap:15px;flex-wrap:wrap;">
            <a href="/login" class="btn" style="background:#6B4226;color:white;padding:12px 25px;border-radius:30px;text-decoration:none;font-family:'Montserrat',sans-serif;">Login</a>
            <a href="/signup" class="btn" style="background:#E9C46A;color:#4A2E05;padding:12px 25px;border-radius:30px;text-decoration:none;font-family:'Montserrat',sans-serif;">Sign Up</a>
        </div>
    </section>

    <?= view('components/cards/bestsellercards') ?>
    <?= view('components/footer') ?>
</body>

</html>