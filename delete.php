<?php
include ("db.php");
if(isset($_GET['id'])){

    $id= $_GET['id'];

    $delete = $con->query("DELETE FROM `student` WHERE `id` = '$id'");

if($delete){
    header("location:session1.php");
}

}

echo ("Hello World");
?>