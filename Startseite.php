<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ihr Besen Shop - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1e3c72;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            position: relative;
        }

        .background-image-left {
            position: absolute;
            top: 0;
            left: 0;
            width: 40%; /* Bild auf 40% der Breite des Bildschirms setzen */
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1651511806003-30e8a55b5fce?q=80&w=1227&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            opacity: 0.8; /* Bild leicht transparent */
            z-index: -1;
        }

        .header-container {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .header-title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .header-subtitle {
            font-size: 1.2rem;
            color: #ddd;
            margin-top: -10px;
            letter-spacing: 2px;
        }

        .login-container {
            width: 50%;
            max-width: 500px;
            padding: 2rem;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            position: relative; /* Damit der Container über dem Bild liegt */
            z-index: 1;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary {
            border-radius: 30px;
        }

        .text-center {
            margin-bottom: 0px;
        }
    </style>
</head>

<body>

    <div class="background-image-left"></div> <!-- Füge das Bild links hinzu -->

    <div class="header-container">
        <h1 class="header-title">Liquor Shop</h1>
        <p class="header-subtitle">Bitte loggen Sie sich ein, um fortzufahren</p>
    </div>

    <div class="login-container mt-4">
        <h3 class="text-center">Kunden Login</h3>
        <!-- Formular wird an check_kunde.php gesendet -->
        <form action="check_kunde.php" method="post">
            <div class="form-group">
                <label for="customer-email">E-Mail</label>
                <input type="email" name="kbn" class="form-control" id="customer-email" placeholder="E-Mail eingeben" required>
            </div>
            <div class="form-group">
                <label for="customer-password">Passwort</label>
                <input type="password" name="kpw" class="form-control" id="customer-password" placeholder="Passwort eingeben" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Anmelden</button>
        </form>
        <p class="text-center mt-3">
            <a href="Register.php">Hier Registrieren</a>
        </p>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
