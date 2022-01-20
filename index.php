<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>











<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    
    
    <nav>
        <div class="toggle">
        <i class="fa fa-bars menu" aria-hidden="true"></i>
        </div>   
      <ul>
        <li>
        <img src="logo1.jpg" ALT="some text" width=100px height=80px >
      </li>
        <li>
           <a href="index.php">Home</a>
        </li>
        <li>
         <a href="contact.php">Contact Us</a>
        </li>
        <li>
          <a href="services.php">Menu</a>
         
         <li>
           <a href="login.php">login<a>
          </li>
           
            <li>
            <a href="order.php">Order</a>
           </li>
          <li>
          <a href="help.php">Help</a>
        </li>
        <li>
          <a href="about.php">About Us</a>
        </li>
        <div class="color"></div>
        <li>
  
        </li>
    
      </ul>
      
    </nav>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.menu').click(function(){
          $('ul').toggleClass('active');


        })
      })
    </script>
    <div class="content">

    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
  </div>
    
    <div class="hero">
      <h1><marquee>Welcome to FoodPicky</marquee></h1>
      </div>
      <img src="food.jpg" width=100% height=100%>
      <footer>
      <p>FoodPicky, Copyright &copy; 2019</p>
      <div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube" ></i></a> 
    </div>

    </footer>



    
      
    

</body>
</html>