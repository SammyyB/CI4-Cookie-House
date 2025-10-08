<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Board - Golden Crumbs Cookie House</title>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body.moodboard-page {
            all: unset;
            display: block !important;
            font-family: 'Georgia', serif !important;
            margin: 0 !important;
            padding: 0 !important;
            background: #fffaf5 !important;
            color: #333 !important;
        }

        body.moodboard-page header,
        body.moodboard-page footer {
            background: #6B4226 !important;
            color: white !important;
            text-align: center !important;
            padding: 15px !important;
            box-shadow: none !important;
        }

        body.moodboard-page main {
            padding: 20px !important;
            max-width: 1100px !important;
            margin: auto !important;
        }

        body.moodboard-page h2 {
            margin-top: 40px !important;
            border-bottom: 2px solid #ddd !important;
            padding-bottom: 8px !important;
            color: #6B4226 !important;
            font-family: 'Georgia', serif !important;
        }

        /* Color Palette */
        body.moodboard-page .palette {
            display: flex !important;
            gap: 15px !important;
            margin-top: 15px !important;
        }

        body.moodboard-page .color {
            width: 100px !important;
            height: 100px !important;
            border-radius: 10px !important;
            text-align: center !important;
            line-height: 100px !important;
            color: white !important;
            font-weight: bold !important;
        }

        /* Typography */
        body.moodboard-page .typography {
            display: flex !important;
            gap: 40px !important;
            margin-top: 15px !important;
        }

        body.moodboard-page .font1 {
            font-family: 'Georgia', serif !important;
            font-size: 20px !important;
        }

        body.moodboard-page .font2 {
            font-family: 'Courier New', monospace !important;
            font-size: 20px !important;
        }

        /* Buttons */
        body.moodboard-page .buttons {
            display: flex !important;
            gap: 15px !important;
            margin-top: 15px !important;
        }

        body.moodboard-page button {
            padding: 10px 20px !important;
            font-size: 16px !important;
            border-radius: 6px !important;
            cursor: pointer !important;
        }

        body.moodboard-page .primary {
            background: #6B4226 !important;
            color: white !important;
            border: none !important;
        }

        body.moodboard-page .secondary {
            background: #E9C46A !important;
            color: black !important;
            border: none !important;
        }

        body.moodboard-page .bordered {
            background: white !important;
            border: 2px solid #6B4226 !important;
            color: #6B4226 !important;
        }

        body.moodboard-page .disabled {
            background: #ccc !important;
            border: none !important;
            color: #666 !important;
            cursor: not-allowed !important;
        }

        /* Logos */
        body.moodboard-page .logos {
            display: flex !important;
            gap: 40px !important;
            margin-top: 15px !important;
            align-items: center !important;
        }

        body.moodboard-page .logos img {
            width: 350px !important;
            height: 350px !important;
            object-fit: cover !important;
        }
    </style>
</head>

<body class="moodboard-page">
    <header style="background:#6B4226; padding:25px 0; text-align:center; color:white; box-shadow:0 3px 6px rgba(0,0,0,0.2);">
        <div style="display:flex;align-items:center;justify-content:center;gap:20px;flex-wrap:wrap;">
            <img src="assets/logo.png" alt="Golden Crumbs Cookie House Logo"
                style="height:80px;width:80px;border-radius:50%;border:3px solid #E9C46A;">
            <div>
                <h1 style="font-family:'Pacifico',cursive;font-size:2.5rem;margin:0;">Golden Crumbs Cookie House 🍪</h1>
                <p style="font-family:'Montserrat',sans-serif;font-size:1rem;margin:5px 0 0 0;letter-spacing:1px;">
                    Freshly Baked Happiness Every Day</p>
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

    <main>
        <h2>Color Palette</h2>
        <p>The Golden Crumbs brand uses a warm, comforting palette inspired by freshly baked cookies and cozy cafés. The
            deep brown (#6B4226) reflects baked goodness, the golden hue (#E9C46A) captures the color of cookies from the
            oven, and the soft orange (#E76F51) adds a playful, inviting touch.</p>
        <div class="palette">
            <div class="color" style="background:#6B4226;">#6B4226</div>
            <div class="color" style="background:#E9C46A;">#E9C46A</div>
            <div class="color" style="background:#E76F51;">#E76F51</div>
        </div>

        <h2>Typography</h2>
        <p>The brand combines the friendly charm of <b>Pacifico</b> for headings and logos with the clean professionalism
            of <b>Montserrat</b> for body text. This creates a balance between warmth and readability across all pages.</p>
        <div class="typography">
            <p class="font1">Pacifico — Playful and welcoming, used for headings and the logo.</p>
            <p class="font2">Montserrat — Modern and clean, used for body text and navigation.</p>
        </div>

        <h2>Buttons</h2>
        <p>Buttons follow the cookie-inspired color scheme. The primary button highlights main actions, while the
            secondary and bordered styles offer variety for different contexts. Disabled buttons maintain a neutral gray
            tone.</p>
        <div class="buttons">
            <button class="primary">Primary</button>
            <button class="secondary">Secondary</button>
            <button class="bordered">Bordered</button>
            <button class="disabled" disabled>Disabled</button>
        </div>

        <h2>Card Sample</h2>
        <p>Cards showcase featured items or products with a simple layout, rounded corners, and subtle shadows. They
            maintain the brand’s clean and inviting look.</p>
        <div class="card">
            <h3>Cookie Card</h3>
            <p>A sample card layout highlighting one of our best sellers with a warm tone and soft presentation.</p>
        </div>

        <h2>Logos</h2>
        <p>The Golden Crumbs logo uses the Pacifico font with a cookie icon, emphasizing warmth, friendliness, and a
            handmade touch. Both circle and square variations are adaptable for different design needs.</p>
        <div class="logos">
            <img src="assets/circle_logo.png" alt="Golden Crumbs Circle Logo">
            <img src="assets/square_logo.png" alt="Golden Crumbs Square Logo">
        </div>
    </main>

    <footer>
        <div style="display:flex;align-items:center;justify-content:center;gap:10px;flex-wrap:wrap;">
            <img src="assets/logo.png" alt="Golden Crumbs Logo"
                style="height:40px;width:40px;border-radius:50%;">
            <span>© 2025 Golden Crumbs Cookie House |
                <a href="#">About</a> |
                <a href="#">Contact</a> |
                <a href="#">Privacy</a>
            </span>
        </div>
    </footer>
</body>

</html>