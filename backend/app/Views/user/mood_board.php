<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Board - Cookie House</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fafafa;
            color: #333;
        }

        header, footer {
            background: #6B4226;
            color: white;
            text-align: center;
            padding: 15px;
        }

        main {
            padding: 20px;
            max-width: 1100px;
            margin: auto;
        }

        h2 {
            margin-top: 40px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 8px;
        }

        /* Color Palette */
        .palette {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        .color {
            width: 100px;
            height: 100px;
            border-radius: 10px;
            text-align: center;
            line-height: 100px;
            color: white;
            font-weight: bold;
        }

        /* Typography */
        .typography {
            display: flex;
            gap: 40px;
            margin-top: 15px;
        }
        .font1 {
            font-family: 'Georgia', serif;
            font-size: 20px;
        }
        .font2 {
            font-family: 'Courier New', monospace;
            font-size: 20px;
        }

        /* Buttons */
        .buttons {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }
        .primary {
            background: #6B4226;
            color: white;
            border: none;
        }
        .secondary {
            background: #E9C46A;
            color: black;
            border: none;
        }
        .bordered {
            background: white;
            border: 2px solid #6B4226;
            color: #6B4226;
        }
        .disabled {
            background: #ccc;
            border: none;
            color: #666;
            cursor: not-allowed;
        }

        /* Card Sample */
        .card {
            margin-top: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 250px;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* Logos */
        .logos {
            display: flex;
            gap: 40px;
            margin-top: 15px;
        }
        .logo-circle, .logo-square {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            color: white;
        }
        .logo-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #6B4226;
        }
        .logo-square {
            width: 100px;
            height: 100px;
            background: #E76F51;
        }
    </style>
</head>
<body>
    <header>
        <h1>Cookie House Mood Board</h1>
    </header>

    <main>
        <!-- Color Palette -->
        <h2>Color Palette</h2>
        <div class="palette">
            <div class="color" style="background:#6B4226;">#6B4226</div>
            <div class="color" style="background:#E9C46A;">#E9C46A</div>
            <div class="color" style="background:#E76F51;">#E76F51</div>
        </div>

        <!-- Typography -->
        <h2>Typography</h2>
        <div class="typography">
            <p class="font1">Georgia, Serif Example</p>
            <p class="font2">Courier New, Monospace Example</p>
        </div>

        <!-- Buttons -->
        <h2>Buttons</h2>
        <div class="buttons">
            <button class="primary">Primary</button>
            <button class="secondary">Secondary</button>
            <button class="bordered">Bordered</button>
            <button class="disabled" disabled>Disabled</button>
        </div>

        <!-- Card -->
        <h2>Card Sample</h2>
        <div class="card">
            <h3>Cookie Card</h3>
            <p>Sample card design with rounded edges, soft shadow, and clean layout.</p>
        </div>

        <!-- Logos -->
        <h2>Logos</h2>
        <div class="logos">
            <div class="logo-circle">CH</div>
            <div class="logo-square">CH</div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Cookie House. All rights reserved.</p>
    </footer>
</body>
</html>