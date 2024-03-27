<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>PiloteToday - Réservation</title>
</head>

<body id="signInBody">
    <header id="signInHeader">
        <a href="index.php">
            <h1>PiloteToday</h1>
        </a>
    </header>
    <section id="signInContent">
        <h2>Connexion / Inscription</h2>
        <p>Saisissez votre e-mail pour vous connecter ou créer un compte</p>
        <div id="containerCards">
            <div id="bookingCard">
                <form action="" method="post">
                    <div id="selectCarContainer">
                    <label for="selectCar">Sélectionnez votre voiture</label>
                        <select name="selectCar" id="selectCar" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div id="dateContainer">
                        <label for="date">Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <input type="submit" id="bookingSubmit">
                </form>
            </div>
        </div>
    </section>
    <footer>
    </footer>
</body>

</html>