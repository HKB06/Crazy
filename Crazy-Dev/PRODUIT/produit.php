<?php
include 'connect.php';

if(isset($_POST['submit'])){
echo 'submit';    if(isset($_POST['submit'])){
        $maxsize=2097152;
        // $format=array('image/png');
    if($_FILES['file_upload']['size']>=$maxsize){
        $error_1='File Size too large';
        echo '<script>alert("'.$error_1.'")</script>';
    }
    elseif($_FILES['file_upload']['size']==0){
        $error_2='Invalid File';
        echo '<script>alert("'.$error_2.'")</script>';
    }
        else{
            $target_dir = "IMG/";
            $target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
            $image=$_FILES["file_upload"]["name"];
            $model=$_POST['model'];
            $brand=$_POST['brand'];
            $description=$_POST['description'];

            $sql="insert into datap (image,model,brand,description) 
            value('$image','$model','$brand','$description')";
            $result=mysqli_query($con,$sql);
            if($result){
                " enregistrement effectué";
                // header('location:display.php');
            }else{
                die(mysqli_error($con));
            }
            if(move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)){ 
            echo "The file ". basename($_FILES["file_upload"]["name"]). " has been uploaded.";
            }
            else{
                echo "sorry";
                }
            }
    }
    else{
        var_dump($_POST);
    }

   
}
// var_dump($_FILES);
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $image = $_FILES;

//     if(!$image["error"]){
//         $uploadDir = "IMG/";
//         $uploadPath = $uploadDir.$image["name"];
//         move_uploaded_file($image["tmp_name"], $uploadDir);

//         //$pdo = new PDO("mysql:host=localhost;dbname=votre_base_de_donnees", "votre_utilisateur", "votre_mot_de_passe");
//         // $sql = "INSERT INTO produit datap VALUE :IMG/ ";
//         // $stmt = $pdo->prepare($sql);
//         // $stmt->bindParam(":chemin", $uploadPath);
//         // $stmt->execute();

//         echo "image téléchargé avec succès et chemin enregistré dans la base données.";
//     }else{
//         echo "Erreur lors du téléchargement de l'image.";
//     }
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="file_upload" />
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" class="form-control" placeholder="Entre the model" name="model" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Brand</label>
                <input type="text" class="form-control" placeholder="Entre the brand" name="brand" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Entre the description" name="description" autocomplete="off">
            </div>
                

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </div>
</body>
</html>