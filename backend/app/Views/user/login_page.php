<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Golden Crumbs Cookie House | Login</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      background: #fff8f0;
      color: #333;
    }

    header {
      background: #5c3d2e;
      color: white;
      padding: 15px;
      text-align: center;
    }

    header img {
      height: 60px;
      width: 60px;
      border-radius: 50%;
      margin-right: 10px;
      vertical-align: middle;
    }

    header span {
      font-family: 'Pacifico', cursive;
      font-size: 1.8rem;
      vertical-align: middle;
    }

    nav {
      background: #e2c2a2;
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: #5c3d2e;
      margin: 0 15px;
      text-decoration: none;
      font-weight: 600;
    }

    .form-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background: #f4e1d2;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #5c3d2e;
    }

    .form-container input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .form-container button {
      width: 100%;
      padding: 10px;
      background: #5c3d2e;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
    }

    footer {
      background: #5c3d2e;
      color: white;
      padding: 15px;
      text-align: center;
      margin-top: 50px;
    }

    footer img {
      height: 40px;
      width: 40px;
      border-radius: 50%;
      margin-right: 8px;
      vertical-align: middle;
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

  <div class="form-container">
    <h2>Login</h2>
    <form>
      <input type="text" placeholder="Username or Email" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>

  <footer>
    <img src="/assets/logo.png" alt="Golden Crumbs Logo">
    <span>© 2025 Golden Crumbs Cookie House | All rights reserved.</span>
  </footer>
</body>

</html>