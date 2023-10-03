<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from data where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="update data set id='$id',name='$name',email='$email',password='$password'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        "upgrade successfull";
        //header('location:display.php');
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
                <input type="text" class="form-control" placeholder="Entre your name" name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Entre your email" name="email" autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Entre your password" name="password"autocomplete="off" value=<?php echo $password; ?>>
            </div>
                

                <button type="submit" name="submit" class="btn btn-primary">Upgrade</button>
        </form>
    </div>
</body>
</html>  