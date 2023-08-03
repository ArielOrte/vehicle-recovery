<?php
include 'config.php';
if(isset($_GET['delete1id'])){
    $id=$_GET['delete1id'];

    $sql = "DELETE FROM mechanics WHERE id = $id";
    $res=mysqli_query($conn,$sql);
    if($res){
        //echo "Deleted successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>