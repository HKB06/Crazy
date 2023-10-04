<?php
session_start();
include 'connect.php';
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
 
    $username = $_POST['username']; 
    $password = $_POST['password'];
    
    if($username !== "" && $password !== "")
        {
        $requete = "SELECT count(*) FROM data where  name = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($con,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['name'] = $username;
            header('Location: messagelogin.php');
        }
        else
        {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
        }
    else
    {
        header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
    
    header('Location: login.php');
}
mysqli_close($con); // fermer la connexion
?>
