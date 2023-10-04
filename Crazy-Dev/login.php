<html>

<head>
    <meta charset="utf-8">
    <!------------------------------------------- le css ----------------------------------------------->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>

<body>
    <div id="container">

        <!------------------------------------------- connexion login ----------------------------------------------->

        <form id="miseforme" action="verifiactionlogin.php" method="POST">
            <h1>Connexion</h1>
            <div class="login">
                <label><b>Nom d'utilisateur</b></label>
                <input id="login" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input id="login" type="password" placeholder="Entrer le mot de passe" name="password" required>
            </div>
            <input type="submit" id='submit' value='LOGIN'>
            <?php
                if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
            ?>

        </form>
    </div>
</body>

</html>