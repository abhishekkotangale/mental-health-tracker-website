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
    <title>Blogs</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>

  </head>
  <body>
  <?php
    include 'user-nav.php';
  ?>
    
    
    <?php

    include '../assets/connection.php';


    $id = $_GET['update'];
    $showquery = "select * from blogs where id='$id' ";
    $showData = mysqli_query($con,$showquery);

    $result = mysqli_fetch_array($showData);


   ?>
    <div class="container" style="padding-top: 80px;">
        <img src="<?php echo $result['image'];?>" width="100" height="100"" class="card-img-top" alt="..." style="height: 400px;">
        <center style="padding-top: 20px;">
        <h1><?php echo $result['title'] ?></h1>
        </center>

        <p style="padding-top: 20px;"><?php echo $result['Description'] ?></p>

    </div>
   
    <?php
?>

    


        </div>
       </div>
       <footer>
        <div class="footer-para text-center text-white p-2" style="background-color:black;">
            <p>Copyright © Mental Health. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
    </footer>
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
    
    <script type="text/javascript">
		$(".mca-heading").ripples({
			resolution: 512,
			dropRadius: 20,
			interactive: true,
			perturbance: 0.02,
		});
	</script>
    
  </body>
</html>