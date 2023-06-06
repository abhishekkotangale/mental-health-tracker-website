<?php

  session_start();

  if(!isset($_SESSION['username'])){
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
    <title>Add Psy</title>
    <link rel="stylesheet" href="addBlogs.css">
  </head>
  <body>
    
  <?php 
    include '../common/user-nav.php';
  ?>
  
  <div class="table-responsive">
    <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">qualification</th>
            <th scope="col">about</th>
            <th scope="col">Images</th>
            <th scope="col">update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
                    include '../assets/connection.php';
                    $selectQuery = "select * from psychiatrist";
                    $query = mysqli_query($con , $selectQuery);
                    while($result = mysqli_fetch_array($query)){
            ?>

          <tr>
            <td><?php echo $result['psy_username'];?></td>
            <td><?php echo $result['email'];?></td>
            <td><?php echo $result['qualification'];?></td>
            <td><?php echo $result['about'];?></td>
            <td><img src="<?php echo $result['image'];?>" width="100" height="100"></td>
            <td><a href="updatepsy.php?update=<?php echo $result['id']; ?>"><i class="fa fa-edit"></i></a></td>
            <td><a href="deletepsy.php?deleteData=<?php echo $result['id']; ?>"><i class="fa fa-trash"></i></a></td>
          </tr>



              <?php
            }
            ?>
          
        </tbody>
      </table>
    </div>
    


    

   <div class="container-fluid add-image">
    <div class="container add-image-form">
      <center>
        <div class="title">
          <h1 class="text-white">Add psychiatrist</h1>
        </div>
      </center>
    <?php
          if(isset($_SESSION['username'])){
            echo '<div class="container">
              <div class="upload-form">
                  <form action="uploadpsy.php" method="post" enctype="multipart/form-data">
                  
                      <div class="mb-3">
                          <input type="text" class="form-control" name="fullName" placeholder="Full Name" required>
                      </div>
                      <div class="mb-3">
                          <input type="email" class="form-control" name="email" placeholder="email Id" required>
                      </div>
                      <div class="mb-3">
                          <input type="text" class="form-control" name="qualification" placeholder="qualification" required>
                      </div>
                      <div class="mb-3">
                          <input type="text" class="form-control" name="about" placeholder="about" required>
                      </div>
                      <div class="mb-3">
                          <input type="password" class="form-control" name="password" placeholder="Password" required>
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