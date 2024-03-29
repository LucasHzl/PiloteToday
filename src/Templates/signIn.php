<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>PiloteToday - Connexion</title>
</head>

<body id="signInBody">
    <header id="signInHeader">
        <a href="accueil">
            <h1>PiloteToday</h1>
        </a>
    </header>
    <section id="signInContent">
        <h2>Connexion / Inscription</h2>
        <p>Saisissez votre e-mail pour vous connecter ou créer un compte</p>
        <div id="containerCards">
                <div id="signInCard">
                    <form action="" method="post">
                        <div class="emailInput">
                            <label for="email">Email</label>
                            <input type="text" for="email">
                            <label for="password">Password</label>
                            <input type="text" for="password">
                        </div>
                    </form>
                    <a href="inscription">
                        <button id="signInButton">Connexion</button>
                    </a>
                </div>
                <div id="registerCard">
                <form id="registerForm" action="<?php echo SIGNIN_PAGE ?>" method="post">
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
                    <input id="registerSubmit" type="submit" value="inscription">
                </form>
            </div>
        </div>
    </section>
    <footer>
        <p>PiloteToday - Tous droits réservés</p>
    </footer>
</body>
</html>