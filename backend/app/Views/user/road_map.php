<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Golden Crumbs Cookie House | Road Map</title>
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
      vertical-align: middle;
      margin-right: 10px;
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
    main {
      padding: 30px;
    }
    h1, h2 {
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
    ul {
      list-style: none;
      padding: 0;
    }
    ul li {
      background: #f4e1d2;
      margin: 5px 0;
      padding: 8px 12px;
      border-radius: 8px;
    }
    footer {
      background: #5c3d2e;
      color: white;
      padding: 15px;
      text-align: center;
    }
    footer img {
      height: 40px;
      width: 40px;
      border-radius: 50%;
      vertical-align: middle;
      margin-right: 8px;
    }
  </style>
</head>
<body>

  <header>
    <img src="/images/logo.png" alt="Golden Crumbs Logo">
    <span>Golden Crumbs Cookie House 🍪</span>
  </header>

  <nav>
    <a href="/">Home</a>
    <a href="/login">Login</a>
    <a href="/signup">Sign Up</a>
    <a href="/moodboard">Mood Board</a>
    <a href="/roadmap">Road Map</a>
  </nav>

  <main>
    <h1>System Road Map</h1>
    
    <section class="crud-section">
      <h2>USER</h2>
      <ul>
        <li>CREATE → Sign Up (Customer) / Add + Create (Employee)</li>
        <li>READ → (Admin) List / Find Self Info (Self)</li>
        <li>UPDATE → (Admin) Block/Update Profile / Update Other Info (Self)</li>
        <li>DELETE → (Admin) Deactivate / (Self) Deactivate</li>
      </ul>
    </section>

    <section class="crud-section">
      <h2>SERVICE</h2>
      <ul>
        <li>CREATE → Admin adds new service (Cookie, Coffee, Silog, Menu)</li>
        <li>READ → List of services for customers / Admin views all services</li>
        <li>UPDATE → Admin updates service details</li>
        <li>DELETE → Admin removes service</li>
      </ul>
    </section>

    <section class="crud-section">
      <h2>REQUEST</h2>
      <ul>
        <li>CREATE → Customer places request / Admin adds order</li>
        <li>READ → Admin views all requests / Client checks own A/C (account)</li>
        <li>UPDATE → Admin updates status / Client updates account info</li>
        <li>DELETE → Admin or Client cancels request</li>
      </ul>
    </section>
  </main>

  <footer>
    <img src="/images/logo.png" alt="Golden Crumbs Logo">
    <span>© 2025 Golden Crumbs Cookie House | All rights reserved.</span>
  </footer>

</body>
</html>