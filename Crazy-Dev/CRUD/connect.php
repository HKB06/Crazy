<?php

$con=new mysqli('localhost','root','','produit');

if($con){
    echo "Connection OK";
}else{
    die(mysqli_error($con));
}

?>