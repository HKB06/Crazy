<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $image=$_POST['image'];
    $model=$_POST['model'];
    $brand=$_POST['brand'];
    $description=$_POST['description'];

    $sql="insert into datap (image,model,brand,description) 
    value('$image','$model','$brand','$description')";
    $result=mysqli_query($con,$sql);
    if($result){
        " enregistrement effectué";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $image = $_FILES["image"];

    if($image["error"] === UPLOAD_ERR_OK){
        $uploadDir = "IMG/";
        $uploadPath = $uploadDir.$image["name"];
        move_uploaded_file($image["tmp_name"], $uploadPath);

        //$pdo = new PDO("mysql:host=localhost;dbname=votre_base_de_donnees", "votre_utilisateur", "votre_mot_de_passe");
        $sql = "INSERT INTO produit datap VALUE :IMG/ ";
    }
}
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
        <form method="post">
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control-file" placeholder="Entre the image" name="image" autocomplete="off">
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
        </form>
    </div>
</body>
</html>