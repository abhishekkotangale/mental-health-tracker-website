<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="blogs.css">
    <title>Profile</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

  </head>
  <body>

    <?php include('../common/user-nav.php'); ?>

    

    <div class="container text-center pt-lg-4 pb-lg-4" style="margin-top:50px;">
         <div class="card shadow-lg rounded p-4">
            <h1>Change Password</h1>
            <form action="changepass.php" method="POST">
               <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Old Password</label>
                 <input type="password" class="form-control" id="exampleInputEmail1" name="oldPass" required>
               </div>
               <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">New Password</label>
                 <input type="password" class="form-control" id="exampleInputPassword1" name="newpass" required>
               </div>
               <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Re-Enter New Password</label>
                   <input type="password" class="form-control" id="exampleInputPassword1" name="cnewpass" required>
                 </div>
                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               
             </form>
            
         </div>
     </div>

     <div class="delete">
      <h1 class="text-center  bg-danger">Delete Acoount</h1>

      <?php
                    include '../assets/connection.php';
                    $selectQuery = "select * from users";
                    $query = mysqli_query($con , $selectQuery);
                    $result = mysqli_fetch_array($query)
                    
                   ?>
                   <center class="pb-lg-5 pt-lg-5"><a href="accountdelete.php?deleteData=<?php echo $_SESSION['id']; ?>" style="width: 100px; padding: 10px 10px;outline: none !important;border: 2px solid #000;border-radius: 50px;background: transparent;color: #000; text-decoration:none;"; >Delete Account</i></a></center>
    </div>

    <?php include('../assets/footer.php'); ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
    
    
    
  </body>
</html>