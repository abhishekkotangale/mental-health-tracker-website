<?php
 session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="progress.css">
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
<?php
    include '../common/user-nav.php';
  ?>





      <main>
        <div class="container greeting-section">
          <div class="jumbotron">
            <h2 class="display-5 text-center pb-3">
              Hello <?php
                    if(isset( $_SESSION['username'])){
                       echo $_SESSION['username'];
                    }else{
                      echo 'user';
                    }
              ?>
              </br>
              Welcome to Our Mental Health Cure System!
            </h2>
            <p class="text-center">We Will Cure your Mental Health.”</p>
          </div>

          
      </main>

      <div class="body-progress">
        
        <center><h1 class="text-white">Dashboard</h1></center>
        
      <div class="body-progress">
                <!-- Progress -->
        <div class="block">
               
		<div class="box">
        
			<p class="number">
				<span class="num">80</span>
				<span class="sub">%</span>
			</p>
			<p class="title">Month</p>
		</div>
		<span class="dots"></span>
		<svg class="svg">
			<defs>
				<linearGradient id="gradientStyle">
					<stop offset="0%" stop-color="#565656" />
					<stop offset="100%" stop-color="#b7b5b5" />
				</linearGradient>
			</defs>
			<circle class="circle" cx="90" cy="90" r="80" />
		</svg>
	</div>
	<div class="block">
		<div class="box">
			<p class="number">
				<span class="num">100</span>
				<span class="sub">%</span>
			</p>
			<p class="title">Week</p>
		</div>
		<span class="dots"></span>
		<svg class="svg">
			<circle class="circle" cx="90" cy="90" r="80" />
		</svg>
	</div>
	<div class="block">
		<div class="box">
			<p class="number">
				<span class="num">35</span>
				<span class="sub">%</span>
			</p>
			<p class="title">Today</p>
		</div>
		<span class="dots"></span>
		<svg class="svg">
			<circle class="circle" cx="90" cy="90" r="80" />
		</svg>
</div>
      </div>

      <div>
      <h3 class="text-white">Your Progress is good😇😀</h3>
      </div>

      </div>

    <!-- Quiz section -->

    <div class="quiz-card">
    <div id="container">	
	
	<div class="product-details">
		
	<h1>Take Quiz</h1>
	<br>
    <br>
		
			<p class="information">" To track your Mental health you must need to take the test/quiz.</p>

		
		
<div class="control">

  <a class="btn" style="background-color: 809fff;" href="../QUIZZ/home.html">Take Quiz</a> 


	
</div>
			
</div>
	
<div class="product-image">
	
	<img src="../img/123.jpg" alt="">
	


</div>

</div>



    </div>


    



      <footer>
        <div class="footer-para text-center text-white p-2" style="background-color:black;">
            <p>Copyright © Mental Health. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
    </footer>
      
    <script src="progress.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>