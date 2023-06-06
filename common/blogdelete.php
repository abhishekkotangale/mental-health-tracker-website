<?php

    session_start();

     if(!isset($_SESSION['username']) and !isset($_SESSION['username_psy'])){
        header('location:../login_signup/adminlogin.php');
      }

?>

<?php  

    include '../assets/connection.php';

    $id = $_GET['deleteData'];

    $deleteQuery = "delete from blogs where id='$id' ";
    
    $query = mysqli_query($con,$deleteQuery);

    if($query){
        ?>
        <script>
            alert("deleted Successfully");
            location.replace("blogs.php");
        </script>

        <?php
    }else{
        ?>
        <script>
            alert("can not deleted Successfully");
        </script>

        <?php
    }

?>