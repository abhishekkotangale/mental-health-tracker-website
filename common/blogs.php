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
  
  <?php
    include 'user-nav.php';
  ?>
    
    


    
    <div class="container-fluid mca-heading">
            <div class="text-center">
                <h1 class="heading" data-aos="fade-up"  data-aos-duration="3000">Blogs</h1>
            </div>
    </div>

    <div class="container-fluid content-mca">
        <div class="container">
            <div class="row">
            <?php
                include '../assets/connection.php';
                $selectQuery = "select * from blogs ORDER BY id DESC";
                $query = mysqli_query($con , $selectQuery);
                while($result = mysqli_fetch_array($query)){
                  ?>

                <div class="col-lg-6 col-md-12 p-4">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 100%;">
                        <img src="<?php echo $result['image'];?>" width="100" height="100"" class="card-img-top" alt="..." style="height: 400px;">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $result['title'];?></h5>
                          <p class="card-text"> <?php echo $result['shortDesc'];?></p>

                          <p> <a href="full-blog.php?update=<?php echo $result['id']; ?>" class="text-danger">Continue Reading</a></td></p>
                          <?php
                            if(isset($_SESSION['username'])){
                              ?>
                              <a href="blogupdate.php?update=<?php echo $result['id']; ?>"><i class="fa fa-edit text-danger"></i></a>
                              <a href="blogdelete.php?deleteData=<?php echo $result['id']; ?>"><i class="fa fa-trash text-danger"></i></a>
                              <?php
                            }
                          ?>
                          
                        </div>
                      </div>
                </div>
                  <?php
                }
                ?>
                
            </div>
        </div>
      </div>



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