<?php session_start(); ?>

<?php 
        include('../assets/connection.php');
        $userid =  $_SESSION['id'];
        $password = $_POST['oldPass'];
        
        $newpass = mysqli_real_escape_string($con, $_POST['newpass']);
        $cnewpass = mysqli_real_escape_string($con, $_POST['cnewpass']);
        
        
        $pass = password_hash($newpass , PASSWORD_BCRYPT);
        $cpass = password_hash($cnewpass , PASSWORD_BCRYPT);





        $id_search = " select * from users where id='$userid' ";
        $query = mysqli_query($con , $id_search);

        $id_count = mysqli_num_rows($query);

        if($id_count){
          $email_pass = mysqli_fetch_assoc($query);
          $db_pass = $email_pass['password'];

          $pass_decode = password_verify($password,$db_pass);

          if($pass_decode){
            if($newpass === $cnewpass){
                $updatequery = "update users set password='$pass',cpassword='$cpass' where id='$userid'";
                $passquery = mysqli_query($con,$updatequery);
                if($passquery){
                    ?>
                        <script>alert("Password changed")</script>
                    <?php
                    header('location:profile.php');
                }else{
                    echo "not inserted";
                }
            }else{
                echo "your new password not match";
            }
          }else{
            echo "password not match";
          }
        }else{
          echo "id not found";
        }
?>