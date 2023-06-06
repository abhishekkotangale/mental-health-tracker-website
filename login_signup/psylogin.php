<?php
  session_start();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login-signup.css">
</head>
<body>

    <?php
      include '../assets/headeradpsy.php';
      include '../assets/connection.php';
      if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = " select * from psychiatrist where email='$email' ";
        $query = mysqli_query($con , $email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
          $email_pass = mysqli_fetch_assoc($query);
          $db_pass = $email_pass['password'];
          $_SESSION['username_psy'] =$email_pass['psy_username'];
          $_SESSION['pid'] =$email_pass['id'];
          

          $pass_decode = password_verify($password,$db_pass);

          if($pass_decode){
            echo "login successful";
            header('location:../psy/index.php');
          }else{
            echo "password incorrect";
          }
        }else{
          echo "email not found";
        }
      }
      
    ?>
    
    <div class="container-fluid background shadow-lg   rounded">
        
     <div class="container login-signup-form-height-width">
      <div class="card background-color">
        <div class="card-header text-center">
          Psy Login Form
        </div>
        <img src="../img/login.gif" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <p class="card-text text-danger">Error text</p>
    
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="POST" class="form">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type youe E-mail here...." name="email" required>
            </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <div class="input-group mb-3 field">

                      <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Type youe Password here...." name="password" required>
                      <span class="input-group-text" id="basic-addon2"><i class="fas fa-eye"></i></span>
                  </div>
              </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>

        
     </div>
        
    </div>

    <?php
      include '../assets/footer.php';
   ?>
        <script src="../js/pass_hide_show.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>