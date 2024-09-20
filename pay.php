<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquor Shop - Bezahlung</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }

        .top-bar {
            background-image: url('https://source.unsplash.com/1600x900/?payment,creditcard');
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

        .payment-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 90%;
            max-width: 600px;
            margin: 40px auto;
        }

        .payment-header {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1e3c72;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            font-size: 1rem;
            border: 1px solid #ddd;
        }

        .btn-pay {
            background-color: #1e3c72;
            color: #fff;
            border-radius: 30px;
            padding: 10px 20px;
            width: 100%;
            font-size: 1.2rem;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-pay:hover {
            background-color: #2a5298;
            transform: scale(1.05);
        }

        .form-row {
            display: flex;
            justify-content: space-between;
        }

        .form-row .form-control {
            width: 48%;
        }

        .card-icons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .card-icons img {
            width: 80px;
            height: 50px;
        }

        .total-amount {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        .confirmation-message {
        text-align: center;
        padding: 20px; 
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        width: 70%; 
        max-width: 800px; 
        margin-left: auto;
        margin-right: auto;
}


        .confirmation-message h2 {
            color: #1e3c72;
            margin-bottom: 20px;
        }

        .confirmation-message a {
            background-color: #1e3c72;
            color: #fff;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            margin: 10px;
            display: inline-block;
        }

        .confirmation-message a:hover {
            background-color: #2a5298;
        }
    </style>
</head>

<body>
    <!-- Top-Bar für Bezahlseite -->
    <div class="top-bar">
        <h1>Bezahlung</h1>
        <a href="Basket.php" class="btn">
            <i class="fas fa-shopping-cart"></i> Zurück zum Warenkorb
        </a>
    </div>

    <!-- Payment Form -->
    <div class="payment-container">
        <div class="payment-header">Zahlungsdetails eingeben</div>

        <!-- Gesamtbetrag -->
        <div class="total-amount">Gesamtbetrag: €99.99</div>

        <div class="card-icons">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Visa">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Mastercard_2019_logo.svg" alt="MasterCard">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/American_Express_logo_%282018%29.svg" alt="American Express">
        </div>

        <form id="payment-form">
            <input type="text" class="form-control" placeholder="Name auf der Karte" required>
            <input type="text" class="form-control" placeholder="Kartennummer" required>

            <div class="form-row">
                <input type="text" class="form-control" placeholder="MM/YY" required>
                <input type="text" class="form-control" placeholder="CVC" required>
            </div>

            <input type="text" class="form-control" placeholder="Rechnungsadresse" required>

            <button type="submit" class="btn btn-pay">Zahlung abschließen</button>
        </form>
    </div>

    <!-- Bestätigungsmeldung -->
    <div class="confirmation-message" id="confirmation-message" style="display: none;">
        <h2>Danke für die Bestellung!</h2>
        <p>Möchtest du zurück zum Shop oder uns schon verlassen?</p>
        <a href="Main_Customer.php">Zurück zum Shop</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // JavaScript to show the confirmation message after form submission
        document.getElementById("payment-form").addEventListener("submit", function (e) {
            e.preventDefault();
            document.querySelector(".payment-container").style.display = "none";
            document.getElementById("confirmation-message").style.display = "block";
        });
    </script>
</body>

</html>
