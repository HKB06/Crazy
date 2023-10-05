<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style_back.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="content">
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];
 ?>
 <div id="container" > 
    <?php
 echo "<center> Bonjour vous êtes inscrit, connectez vous : </br> <a href=\"login.php\">Connexion</a></center>";
 ?>
 </div>
 <?php
 }
 ?>
 
 </div>
 </body>
</html>