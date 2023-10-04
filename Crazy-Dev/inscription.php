<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="ISO-8859-1">
<meta charset="ANSI">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="utf-8">
    <!------------------------------------------- le css ----------------------------------------------->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>

<body>
    <div id="container">

        <!------------------------------------------- inscription ----------------------------------------------->

        <form id="miseforme" action="verificationinscription.php" method="POST">
            <h1>Inscription</h1>
            <div class="inscription">
                <label><b>Nom d'utilisateur</b></label>
                <input id="login" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input id="login" type="password" placeholder="Entrer le mot de passe" name="password" required>

                <label><b>Mail</b></label>
                <input id="login" type="text" placeholder="Entrer votre mail" name="mail" required>
                
            </div>
            <input type="submit" name="inscription" id='submit' value='Inscription'>

            <p class="box-register">Déjà inscrit? 
            <a href="login.php">Connectez-vous ici</a></p>

        </form>
    </div>
</body>

</html>