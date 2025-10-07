<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Crumbs Cookie House | Login</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* --- Login Page Styles --- */
        body.login-page {
            background: #fff8f0;
            color: #333;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        body.login-page header {
            background: #5c3d2e;
            color: white;
            padding: 15px;
            text-align: center;
        }

        body.login-page header img {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
        }

        body.login-page header span {
            font-family: 'Pacifico', cursive;
            font-size: 1.8rem;
            vertical-align: middle;
        }

        /* Navbar */
        body.login-page nav {
            background: #e2c2a2;
            padding: 10px;
            text-align: center;
        }

        body.login-page nav a {
            color: #5c3d2e;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
        }

        /* Dedicated login wrapper to isolate from .container */
        body.login-page .login-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        /* Form Container */
        body.login-page .form-container {
            width: 100%;
            max-width: 400px;
            padding: 25px;
            background: #f4e1d2;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        body.login-page .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #5c3d2e;
        }

        body.login-page .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        body.login-page .form-container button {
            width: 100%;
            padding: 10px;
            background: #5c3d2e;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
        }

        body.login-page .form-container button:hover {
            background: #7a5543;
        }

        /* Footer */
        body.login-page footer {
            background: #5c3d2e;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: auto;
        }

        body.login-page footer img {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
        }
    </style>

</head>

<body class="login-page">
    <header style="background:#6B4226; padding:25px 0; text-align:center; color:white; box-shadow:0 3px 6px rgba(0,0,0,0.2);">
        <div style="display:flex;align-items:center;justify-content:center;gap:20px;flex-wrap:wrap;">
            <img src="assets/logo.png" alt="Golden Crumbs Cookie House Logo" style="height:80px;width:80px;border-radius:50%;border:3px solid #E9C46A;">
            <div>
                <h1 style="font-family:'Pacifico',cursive;font-size:2.5rem;margin:0;">Golden Crumbs Cookie House 🍪</h1>
                <p style="font-family:'Montserrat',sans-serif;font-size:1rem;margin:5px 0 0 0;letter-spacing:1px;">Freshly Baked Happiness Every Day</p>
            </div>
        </div>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
        <a href="/moodboard">Mood Board</a>
        <a href="/roadmap">Road Map</a>
    </nav>

    <!-- isolated login section -->
    <div class="login-wrapper">
        <div class="form-container">
            <h2>Login</h2>
            <form>
                <input type="text" placeholder="Username or Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

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