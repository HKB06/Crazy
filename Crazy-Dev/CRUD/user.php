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
        echo "Enregistrement effectué. ID de l'utilisateur créé : " . $userId;
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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" required class="form-control" placeholder="Entre your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" required class="form-control" placeholder="Entre your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" required class="form-control" placeholder="Entre your password" name="password"autocomplete="off">
            </div>
                

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>