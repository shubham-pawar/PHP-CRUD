<?php

    include './includes/connect.php';

    if(isset($_GET['delete_id'])){
      $id=$_GET['delete_id'];
      // echo $id;

      $delete_query="delete from crud where id=$id";

      $result=mysqli_query($con, $delete_query);

      if($result){
          echo "<script>alert('Record deleted successfully!')</script>";
          echo "<script>window.open('display.php','_self')</script>";
        }else{
          die(mysqli_error($con));
        }
    }

?>     