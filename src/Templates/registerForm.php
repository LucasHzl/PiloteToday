<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>PiloteToday - Inscription</title>
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
            <div id="registerCard">
                <form action="" method="post">
                    <div id="firstNameContainer">
                        <label for="firstName">Prénom</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>

                    <div id="lastNameContainer">
                        <label for="lastName">Nom</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>

                    <div id="emailContainer">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>

                    <div id="passwordContainer">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div id="confirmedPasswordContainer">
                        <label for="confirmedPassword">Confirmez le mot de passe</label>
                        <input type="password" id="confirmedPassword" name="confirmedPassword" required>
                    </div>
                </form>
                <button id="signInButton">Connexion / Inscription</button>
            </div>
        </div>
    </section>
    <footer>
    </footer>
</body>

</html>