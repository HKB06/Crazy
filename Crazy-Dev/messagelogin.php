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
 if($_SESSION['name'] !== ""){
 $user = $_SESSION['name'];
 ?>
 <div id="container"> 
    <?php
 echo "<center> Bonjour $user, vous êtes connecté </br> <a href=\"index.php\">Accueil</a></center>";
 ?>
 </div>
 <?php
 }
 ?>
 
 </div>
 </body>
</html>