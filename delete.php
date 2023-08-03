<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM users WHERE id = $id";
    $res=mysqli_query($conn,$sql);
    if($res){
        //echo "Deleted successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>