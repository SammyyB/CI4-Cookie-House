<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Golden Crumbs Cookie House | Mood Board</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    .palette {
      display: flex;
      gap: 15px;
      margin: 20px 0;
    }

    .color {
      width: 80px;
      height: 80px;
      border-radius: 8px;
      text-align: center;
      line-height: 80px;
      color: #fff;
      font-weight: bold;
    }

    .typography {
      margin: 20px 0;
    }

    .buttons {
      display: flex;
      gap: 10px;
      margin: 20px 0;
    }

    .buttons button {
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }

    .primary {
      background: #5c3d2e;
      color: white;
    }

    .secondary {
      background: #e2c2a2;
      color: #5c3d2e;
    }

    .border {
      border: 2px solid #5c3d2e;
      background: white;
      color: #5c3d2e;
    }

    .disabled {
      background: #ccc;
      color: #777;
      cursor: not-allowed;
    }

    .card {
      background: #f4e1d2;
      padding: 20px;
      border-radius: 8px;
      width: 250px;
      margin: 20px auto;
      text-align: center;
    }

    .logos img {
      height: 80px;
      margin: 10px;
      border-radius: 8px;
    }
  </style>
</head>

<body>
  <header>
    <img src="/assets/logo.png" alt="Golden Crumbs Logo">
    <span>Golden Crumbs Cookie House 🍪</span>
  </header>

  <nav>
    <a href="/">Home</a>
    <a href="/login">Login</a>
    <a href="/signup">Sign Up</a>
    <a href="/moodboard">Mood Board</a>
    <a href="/roadmap">Road Map</a>
  </nav>

  <main style="padding:30px;">
    <h1>Mood Board</h1>

    <h2>🎨 Color Palette</h2>
    <div class="palette">
      <div class="color" style="background:#5c3d2e;">#5c3d2e</div>
      <div class="color" style="background:#e2c2a2;">#e2c2a2</div>
      <div class="color" style="background:#f4e1d2;">#f4e1d2</div>
    </div>

    <h2>🖋 Typography</h2>
    <div class="typography">
      <p style="font-family: 'Pacifico', cursive; font-size:1.5rem;">Pacifico - For headers</p>
      <p style="font-family: 'Montserrat', sans-serif;">Montserrat - For body text</p>
    </div>

    <h2>🔘 Button Set</h2>
    <div class="buttons">
      <button class="primary">Primary</button>
      <button class="secondary">Secondary</button>
      <button class="border">Border</button>
      <button class="disabled" disabled>Disabled</button>
    </div>

    <h2>📦 Card Sample</h2>
    <div class="card">
      <h3>Cookie Sample</h3>
      <p>Golden, crunchy outside, soft inside.</p>
    </div>

    <h2>🏷 Logos</h2>
    <div class="logos">
      <img src="/assets/logo.png" alt="Golden Crumbs Circle Logo">
      <img src="/assets/logo.png" style="border-radius:0;" alt="Golden Crumbs Square Logo">
    </div>
  </main>

  <footer>
    <img src="/assets/logo.png" alt="Golden Crumbs Logo">
    <span>© 2025 Golden Crumbs Cookie House | All rights reserved.</span>
  </footer>
</body>

</html>