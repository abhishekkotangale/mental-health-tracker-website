<?php

    session_start();

     if(!isset($_SESSION['username']) and !isset($_SESSION['username_psy'])){
        header('location:../login_signup/adminlogin.php');
      }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Update Blog</title>
  </head>
  <body>






  <?php

include '../assets/connection.php';


    $id = $_GET['update'];
    $showquery = "select * from blogs where id='$id' ";
    $showData = mysqli_query($con,$showquery);

    $result = mysqli_fetch_array($showData);


if(isset($_POST['submit'])){
    
    $filetitle = $_POST['blogtitle'];
    $fileshortdesc = $_POST['shortDesc'];
    $filedesc = $_POST['description'];
    $file = $_FILES['file'];

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if($fileerror == 0){
        $destfile = '../blogImgUpload/'.$filename;

        move_uploaded_file($filepath,$destfile);

        

        

        $updatequery = "update blogs set title='$filetitle',shortDesc='$fileshortdesc', Description='$filedesc', image = '$destfile' where id='$id'";

        $query = mysqli_query($con,$updatequery);

        if($query){
            header('location:blogs.php');
        }else{
            echo "not inserted";
        }
    }
}

?>



<div class="container">
              <div class="upload-form">
                  <form action="" method="post" enctype="multipart/form-data">
                  
                      <div class="mb-3">
                          <input type="text" class="form-control" name="blogtitle" value="<?php echo $result['title'];?>">
                      </div>
                      <div class="mb-3">
                          <input type="text" class="form-control" name="shortDesc" value="<?php echo $result['shortDesc'];?>">
                      </div>
                      <div class="mb-3">
                          <input type="text" class="form-control" name="description" value="<?php echo $result['Description'];?>">
                      </div>
                      <div class="mb-3">
                          <input type="file" class="form-control" name="file">
                      </div>
                      
                      <center>
                         <button type="submit" name="submit" class="btn">Submit</button>
                      </center>
                  </form>
              </div>
          </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>