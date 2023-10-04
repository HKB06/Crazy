<?php 
    include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<br>
<br>
    <div class="container">
    <button class="thebtn" class="btn btn-primary"><a href="produit.php" class="text-light"> 
        Add a product</a></button>
        <br>
        <br>
        <br>
        <br>
        <br>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Sl no</th>
                <th scope="col">Image</th>
                <th scope="col">Model</th>
                <th scope="col">Marque</th>
                <th scope="col">Description</th>
                </tr>
            </thead>
        <tbody>


        <?php 
        

        $sql="Select * from datap";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $image=$row['image'];
                $model=$row['model'];
                $brand=$row['brand']; 
                $description=$row['description'];
                echo '<tr class="tableau">
                        <th scope="row">'.$id.'</th>
                        <td>'.$image.'</td>
                        <td>'.$model.'</td>
                        <td>'.$brand.'</td>
                        <td>'.$description.'</td>
                        <td>
                        <button class="btnup" class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btnsup" class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                        </td>
                      </tr>'; 
            }
        }
    

        ?>

        

        </tbody>
        </table>
    </div>
</body>
</html>