<?php

    session_start();

     if(!isset($_SESSION['username'])){
        header('location:../index.html');
      }

?>

<?php

    include '../assets/connection.php';

    $id = $_GET['deleteData'];

    $deleteQuery = "delete from users where id='$id' ";
    
    $query = mysqli_query($con,$deleteQuery);

    if($query){
        ?>
        <script>
            alert("deleted Successfully");
            location.replace('../index.html');
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