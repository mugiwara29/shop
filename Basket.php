<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquor Shop - Warenkorb</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding-top: 0px;
        }

        /* Top-Bar Styling (gleiche wie in Main_Customer.php) */
        .top-bar {
            background-image: url('https://source.unsplash.com/1600x900/?whiskey,bar');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 1;
            width: 100%;
        }

        .top-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .top-bar h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .top-bar a {
            background-color: #ff9800;
            border-color: #ff9800;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .top-bar a:hover {
            background-color: #e68900;
            transform: scale(1.05);
        }

        /* Cart Styling */
        .cart-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 90%;
            max-width: 800px;
            margin: auto; /* Mitte des Bildschirms */
        }

        .cart-header {
            font-size: 2rem;
            font-weight: bold;
            color: #1e3c72;
            margin-bottom: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item h4 {
            font-size: 1.2rem;
            margin: 0;
            color: #333;
        }

        .cart-item p {
            margin: 0;
            color: #555;
        }

        .cart-item .quantity-input {
            width: 60px;
            margin-right: 10px;
        }

        .cart-item .remove-button {
            background-color: #ff4d4d;
            color: #fff;
            border-radius: 30px;
            margin-left: 10px;
        }

        .cart-item .remove-button:hover {
            background-color: #e60000;
        }

        .cart-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Top-Bar für Warenkorb -->
    <div class="top-bar">
        <h1>Liquor Shop - Ihr Warenkorb</h1>
        <a href="Main_Customer.php" class="btn">
            <i class="fas fa-store"></i> Zurück zum Shop
        </a>
    </div>

    <!-- Cart-Container -->
    <div class="cart-container">
        <div class="cart-header">Warenkorb - Übersicht</div>
        <!-- Hier folgen die Warenkorb-Elemente -->
        <div class="cart-item">
            <div>
                <h4>Produktname</h4>
                <p>Beschreibung des Produkts</p>
            </div>
            <div style="display: flex; align-items: center;">
                <input type="number" class="form-control quantity-input" value="1" min="1" max="10" step="1">
                <button class="btn remove-button">Entfernen</button>
            </div>
        </div>

        <!-- Cart Footer mit Gesamtsumme -->
        <div class="cart-footer"> 
    <h4>Gesamtbetrag: €99.99</h4>
    <form action="pay.php" method="GET">
        <button type="submit" class="btn btn-primary">Zur Kasse</button>
    </form>
</div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
