<?php

  session_start();

  if(!isset($_SESSION['username'])){
    header('location:../index.html');
  }
?>

<?php

    include '../assets/connection.php';

    if(isset($_POST['submit'])){
        $fullname = $_POST['fullName'];
        $email = $_POST['email'];
        $qualification = $_POST['qualification'];
        $about = $_POST['about'];
        $password = $_POST['password'];

        $pass = password_hash($password , PASSWORD_BCRYPT);

        $file = $_FILES['file'];

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = '../psyimg/'.$filename;

            move_uploaded_file($filepath,$destfile);

            $insertquery = "insert into psychiatrist(psy_username,email,qualification,about,image,password) values('$fullname','$email','$qualification','$about','$destfile','$pass')";

            $query = mysqli_query($con,$insertquery);

            if($query){
                echo "inserted";
                header('location:addpsy.php');
            }else{
                echo "not inserted";
            }
        }
    }

?>