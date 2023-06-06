<?php

  session_start();

  if(!isset($_SESSION['username']) and !isset($_SESSION['username_psy'])){
    header('location:index.php');
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
    <title>Add Blogs</title>
    <link rel="stylesheet" href="addBlogs.css">
  </head>
  <body>
    
  <?php 
    include '../common/user-nav.php';
  ?>

<table class="table table-responsive container">
  
  <tbody>
  <?php
  include('../assets/connection.php');
    if(isset($_SESSION['username_psy'])){
      $pid = $_SESSION['pid'];
      $email_search = "select * from blogs where pid = '$pid'";
      $query = mysqli_query($con , $email_search);
      $email_count = mysqli_num_rows($query);

     if($email_count){

        $email_pass = mysqli_fetch_assoc($query);
        ?>
        <tr class=" form-content text-center">
                <td><?php echo $email_pass['title'];?></td>
                <td><?php echo $email_pass['shortDesc'];?></td>
                <td><?php echo $email_pass['Description'];?></td>
                <td><img src="<?php echo $email_pass['image'];?>" width="100" height="100"></td>
                <td><a href="../common/blogupdate.php?update=<?php echo $email_pass['id']; ?>"><i class="fa fa-edit"></i></a></td>
                <td><a href="../common/blogdelete.php?deleteData=<?php echo $email_pass['id']; ?>"><i class="fa fa-trash"></i></a></td>
              </tr>
      <?php
    }
   
?>

  </tbody>
</table>

<?php 
    
 
      
      
    } 
  ?>
    
   <div class="container-fluid add-image">
    <div class="container add-image-form">
      <center>
        <div class="title">
          <h1 class="text-white">Add Blogs</h1>
        </div>
      </center>
    <?php
          if(isset($_SESSION['username']) or isset($_SESSION['username_psy'])){
            echo '<div class="container">
              <div class="upload-form">
                  <form action="uploadBlog.php" method="post" enctype="multipart/form-data">
                  
                      <div class="mb-3">
                          <input type="text" class="form-control" name="blogtitle" placeholder="Blog Title">
                      </div>
                      <div class="mb-3">
                          <input type="text" class="form-control" name="shortDesc" placeholder="Blog Short Description">
                      </div>
                      <div class="mb-3">
                          <textarea class="form-control" id="exampleFormControlTextarea1" name="description" placeholder="Description"></textarea>
                      </div>
                      <div class="mb-3">
                          <input type="file" class="form-control" name="file">
                      </div>
                      
                      <center>
                         <button type="submit" name="submit" class="btn">Submit</button>
                      </center>
                  </form>
              </div>
          </div>' ;
          }
      ?>
    </div>
   </div>

   <footer>
    <div class="footer text-center">
      <h5>All Rights Reserved</h5>
    </div>
   </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>