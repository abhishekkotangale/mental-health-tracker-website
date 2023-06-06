<?php

    

     if(!isset($_SESSION['username_u']) and !isset($_SESSION['username'])){
        header('location:../index.html');
      }

?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="user-nav.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

   

<header class="header">
        <nav class="container-fluid navbar navbar-expand-lg ">
            <div class="container">
              <a class="navbar-brand company-name" href="../index.html"><i class="fas fa-brain"></i><span class="brand-name">Wonder Mind</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="adminhomepage.php">Home</a>
                </li>
                <?php

          if(isset( $_SESSION['username'])){
           echo '<li class="nav-item">
            <a class="nav-link" href="../admin/addBlogs.php">Add Blogs</a>
          </li>';
          }else{
            echo '<li class="nav-item">
            <a class="nav-link" href="cart.php">Chat</a>
          </li>';
            echo '<li class="nav-item">
            <a class="nav-link" href="cart.php">Profile</a>
          </li>';
          echo '<li class="nav-item">
            <a class="nav-link" href="setting.php">Setting</a>
          </li>';
          }
           

        ?>

        <li class="nav-item">
          <a class="nav-link" href="../common/blogs.php">Blogs</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="../user/logout.php">Logout</a>
        </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

</body>
</html>