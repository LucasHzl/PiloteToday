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
        <a href="accueil">
            <h1>PiloteToday</h1>
        </a>
    </header>
    <section id="signInContent">
        <h2>Réservation</h2>
        <p>Selectionnez votre bolide et la date</p>
        <div id="containerCards">
            <div id="bookingCard">
                <form action="" method="post">
                    <div id="selectCarContainer">
                    <label for="selectCar">Sélectionnez votre voiture</label>
                        <select name="selectCar" id="selectCar" required>
                            <?php foreach ($cars as $car) {
                                echo"<option value='$car->id_car'>$car->brand,$car->model</option>";
                            } ?>
                        </select>
                    </div>
                    <div id="selectCoach">
                    <label for="selectCoach">Sélectionnez votre coach</label>
                        <select name="selectCoach" id="selectCoach" required>
                        <?php foreach ($coachs as $coach) {
                                echo"<option value='$coach->id_coach'>$coach->firstName,$coach->lastName</option>";
                            } ?>
                        </select>
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
        <p>PiloteToday - Tous droits réservés</p>
    </footer>
</body>

</html>