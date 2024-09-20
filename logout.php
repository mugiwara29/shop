<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Liquor Shop</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .logout-container {
            background-color: #fff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logout-container h1 {
            color: #1e3c72;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .logout-container p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .logout-container a {
            background-color: #ff9800;
            border-color: #ff9800;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2rem;
            transition: background-color 0.3s, transform 0.3s;
        }

        .logout-container a:hover {
            background-color: #e68900;
            transform: scale(1.05);
        }

        .logout-container .btn-logout {
            background-color: #ff4d4d;
            border-color: #ff4d4d;
            color: white;
            margin-top: 10px;
        }

        .logout-container .btn-logout:hover {
            background-color: #e60000;
        }
    </style>
</head>

<body>
    <div class="logout-container">
        <h1>Du bist nun ausgeloggt!</h1>
        <p>Wir hoffen, dich bald wiederzusehen!</p>
        <a href="Startseite.php" class="btn">Zurück zum Login</a>
    </div>

    <!-- Optional: Footer oder weitere Informationen -->
</body>

</html>
