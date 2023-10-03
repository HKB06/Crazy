<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from datap where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$image=$row['image'];
$model=$row['model'];
$brand=$row['brand'];
$description=$row['description'];

if(isset($_POST['submit'])){
    echo 'submit';
        if(isset($_POST['submit'])){
            $maxsize=2097152;
            // $format=array('image/png');
            if($_FILES["file_upload"]["name"]){
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
                        $sql="update datap set image='$image' where id=$id";
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
       
    
                $model=$_POST['model'];
                $brand=$_POST['brand'];
                $description=$_POST['description'];
            
                $sql="update datap set id='$id',image='$image',model='$model',brand='$brand',description='$description'
                where id=$id";
                $result=mysqli_query($con,$sql);
                if($result){
                    " enregistrement effectué";
                    // header('location:display.php');
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
        <form method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <label>Image</label>
                
                <img src="IMG/<?php echo $image;?>"/>

                <input type="file"name="file_upload" />
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" class="form-control" placeholder="Entre the model" name="model" autocomplete="off" value=<?php echo $model;?>>
            </div>
            <div class="form-group">
                <label>Brand</label>
                <input type="text" class="form-control" placeholder="Entre the brand" name="brand" autocomplete="off" value=<?php echo $brand;?>>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Entre the description" name="description" autocomplete="off" value=<?php echo $description;?>>
            </div>
                

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </div>
</body>
</html> 