<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from datap where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Deleted successfull";
    }else{
        die(mysqli_error($con));
    }
}
?>