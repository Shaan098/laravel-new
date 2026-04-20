<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .button {
            display: inline-block;
            padding: 12px 30px;
            background-color: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 0 10px;
        }

        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Laravel</h1>
        <p>Build amazing web applications with Laravel framework</p>
        <a href="#" class="button">Get Started</a>
        <a href="#" class="button">Documentation</a>
    </div>
</body>
</html>
