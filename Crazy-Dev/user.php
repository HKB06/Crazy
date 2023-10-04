<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO data (name, email, password) 
            VALUES ('$name', '$email', '$password')";
    
    $result = mysqli_query($con, $sql);

    if($result){
        $userId = mysqli_insert_id($con); // Récupère l'ID de l'utilisateur créé
        echo "Enregistrement effectué.";
            header('Location: messageinscription.php');
    }else{
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Document</title>
</head>
<body>
        <div id="container">
            <form id="miseforme" method="POST">
            <h1>Inscription</h1>
            <div class="inscription">
                <label><b>Nom d'utilisateur</b></label>
                <input id="login" type="text" placeholder="Entrer le nom d'utilisateur" name="name" required>

                <label><b>Mot de passe</b></label>
                <input id="login" type="password" placeholder="Entrer le mot de passe" name="password" required>

                <label><b>Mail</b></label>
                <input id="login" type="text" placeholder="Entrer votre mail" name="email" required>
                
            </div>
            </br>
            <p class="box-register">Déjà inscrit? 
            <a href="login.php">Connectez-vous ici</a></p>
            </br>

                <button type="submit"  id="login" class="btn btn-primary">Inscription</button>
        </form>
    </div>
</body>
</html>