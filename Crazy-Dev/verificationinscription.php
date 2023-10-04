<?php
session_start();
include("connect.php");

or die('impossible de se connecter a la base');
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {

    $connexion = mysqli_connect($servername, $username, $password, $bdd);
    if (!$connexion) {
        echo "LA CONNEXION AU SERVEUR MYSQL A ECHOUE\n";
        exit();
    }
    mysqli_select_db($connexion, $bdd); // Correction : Utilisation de $connexion au lieu de mysqli_select_db($bdd)

    // Correction : Utilisation de mysqli_real_escape_string pour échapper les données POST
    $username = mysqli_real_escape_string($connexion, $_POST['username']);
$password = mysqli_real_escape_string($connexion, $_POST['password']);
$mail = mysqli_real_escape_string($connexion, $_POST['mail']);

$sql = 'SELECT * FROM user WHERE utilisateur="' . $username . '"';
$req = mysqli_query($connexion, $sql) or die('Erreur SQL !<br/>' . $sql . '<br/>' . mysqli_error($connexion));
$data = mysqli_fetch_assoc($req); // Utilisation de mysqli_fetch_assoc pour obtenir un tableau associatif

if ($data === null) { // Utilisez === null pour vérifier si l'utilisateur n'existe pas
    $sql = 'INSERT INTO user (utilisateur, password, mail) VALUES ("' . $username . '", "' . $password . '", "' . $mail . '")';
    mysqli_query($connexion, $sql) or die('Erreur SQL !' . $sql . '<br />' . mysqli_error($connexion));
    $erreur = 'Inscription réussie !';
    echo $erreur;
    echo "<br/><a href=\"index.php\">Accueil</a>";
    exit();

} else {
    $erreur = 'Echec de l\'inscription !<br/>Un membre possède déjà ce login !';
    echo $erreur;
    echo "<br/><a href=\"index.php\">Accueil</a>";
    exit();
}
}
?>
