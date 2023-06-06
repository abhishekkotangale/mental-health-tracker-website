<?php

  session_start();

  if(!isset($_SESSION['username']) and !isset($_SESSION['username_psy'])){
    header('location:index.php');
  }
?>

<?php

    include '../assets/connection.php';

    

    if(isset($_POST['submit'])){
        $filetitle = $_POST['blogtitle'];
        $fileshortdesc = $_POST['shortDesc'];
        $filedesc = mysqli_real_escape_string($con,$_POST['description']);
        $file = $_FILES['file'];

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = '../blogImgUpload/'.$filename;

            move_uploaded_file($filepath,$destfile);


            if($_SESSION['username']){
                $insertquery = "insert into blogs(title,shortDesc,Description,image,pid) values('$filetitle','$fileshortdesc','$filedesc','$destfile','null')";
                $query = mysqli_query($con,$insertquery);
                if($query){
                    echo "inserted";
                    header('location:../common/blogs.php');
                }else{
                    echo "not inserted";
                }
            }else{
                $pid = $_SESSION['pid'];
                $insertquery = "insert into blogs(title,shortDesc,Description,image,pid) values('$filetitle','$fileshortdesc','$filedesc','$destfile','$pid')";
                $query = mysqli_query($con,$insertquery);
                if($query){
                    echo "inserted";
                    header('location:../common/blogs.php');
                }else{
                    echo "not inserted";
                }
            }
            

            

            
        }
    }

?>