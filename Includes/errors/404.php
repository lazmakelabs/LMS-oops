<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 50px;
        }
        h1 {
            font-size: 100px;
            margin: 0;
            color: #e74c3c;
        }
        p {
            font-size: 20px;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .search-bar {
            margin: 20px 0;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oops! The page you're looking for doesn't exist.</p>
        <p>Here's what you can do:</p>
        <ul>
            <a href="../../index.php">Go back to the homepage</a><br>
            <a href="javascript:history.back()">Go back to the previous page</a>
        </ul>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <input type="submit" value="Search">
        </div>
        <p>If you need help, feel free to <a href="/contact">contact us</a>.</p>
    </div>
</body>
</html>
