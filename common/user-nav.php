<?php
     if(!isset($_SESSION['username_u']) and !isset($_SESSION['username']) and !isset($_SESSION['username_psy'])){
        header('location:../index.html');
      }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="user-nav.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  
<header class="header">
        <nav class="container-fluid navbar navbar-expand-lg fixed-top" style="background-color: black;">
            <div class="container">
              <a class="navbar-brand company-name" href="../index.html"><i class="fas fa-brain text-white"></i><span class="brand-name text-white">MindTrack</span></a>
              <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php

          if(isset( $_SESSION['username'])){
           echo '<li class="nav-item">
           <a class="nav-link active text-white" aria-current="page" href="adminhomepage.php">Home</a>
       </li>';
           echo '<li class="nav-item">
            <a class="nav-link text-white" href="../admin/addBlogs.php">Add Blogs</a>
          </li>';
          echo '<li class="nav-item">
            <a class="nav-link text-white" href="../admin/addpsy.php">Add psychiatrist</a>
          </li>';
          }else if(isset( $_SESSION['username_psy'])){
            echo '<li class="nav-item">
            <a class="nav-link text-white" href="../admin/addBlogs.php">Add Blogs</a>
          </li>';
          }
          else{
            echo '<li class="nav-item">
           <a class="nav-link active text-white" aria-current="page" href="../user/index.php">Home</a>
            </li>';
            echo '<li class="nav-item">
            <a class="nav-link text-white" href="../nchat/home.php">Chat</a>
          </li>';
            echo '<li class="nav-item">
            <a class="nav-link text-white" href="../user/profile.php">Profile</a>
          </li>';
          }
           

        ?>

        <li class="nav-item">
          <a class="nav-link text-white" href="../common/blogs.php">Blogs</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white" href="logout.php">Logout</a>
        </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

</body>
</html>