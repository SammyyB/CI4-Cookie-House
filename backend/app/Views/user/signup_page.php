<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Crumbs Cookie House | Sign Up</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body.signup-page {
            background: #fff8f0;
            color: #333;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .signup-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
        }

        .signup-page .form-container {
            background: #f4e1d2;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 420px;
        }

        .signup-page .form-container h2 {
            text-align: center;
            color: #5c3d2e;
            margin-bottom: 20px;
        }

        .signup-page .name-group {
            display: flex;
            gap: 10px;
        }

        .signup-page .name-group input {
            flex: 1;
        }

        .signup-page .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .signup-page .form-container button {
            width: 100%;
            padding: 10px;
            background: #5c3d2e;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 5px;
        }

        .signup-page .form-container button:hover {
            background: #7a5543;
        }

        .signup-page footer {
            background: #5c3d2e;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: auto;
        }

        .signup-page footer a {
            color: #f5e3c8;
            text-decoration: none;
        }

        .signup-page footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="signup-page">
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

    <div class="signup-wrapper">
        <div class="form-container">
            <h2>Create Account</h2>
            <form>
                <div class="name-group">
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Last Name" required>
                </div>
                <input type="email" placeholder="Email Address" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
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