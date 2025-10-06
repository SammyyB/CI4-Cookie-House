<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Road Map - Cookie House</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #fff8f0;
      color: #333;
    }
    header, footer {
      background: #5c3d2e;
      color: white;
      padding: 15px;
      text-align: center;
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
  </style>
</head>
<body>

  <header>
    <h1>🍪 Cookie House Road Map</h1>
  </header>

  <main>
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
    <p>&copy; 2025 Cookie House | All rights reserved.</p>
  </footer>

</body>
</html>
