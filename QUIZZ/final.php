<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz-final.css">
    <title>Result</title>
</head>
<body>
    
    <?php
        include '../common/user-nav.php';
    ?>
    <!--AWARD & POINTS-->
    <div class="wrapper">
        <div class="border">
            <h3 class="username"><span class="name" style="font-size: 50px; color: #fff;"></span><br>WELL DONE !</h3>
            <center><h1 class="text-white">Your Health is Good</h1></center>
            <p class="userpoints">Please do Following Excercises <span class="points" style="color: greenyellow;"></span></p>
            <ul class="text-white" style="font-size:20px;">
                <li class="p-2">Do Excercises</li>
                <li class="p-2">Do Meditation</li>
                <li class="p-2">Talk with friends or family as much as you can</li>
            </ul>
        </div>
    </div>



    <script src="https://kit.fontawesome.com/d56261bbb9.js"></script>

    <script src="userinfo.js"></script>
</body>
</html>