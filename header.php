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
           <a href="index.html">Home</a>
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
    <form>
        <input type="text" name="" placeholder="cusine or restaurant">
        <input type="submit" name="" value="Search">
      
    
   
   </form>
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
<?php
session_start();
if(isset($_SESSION['user_info']))
echo 'Welcome <A HREF="login.html"> '.$_SESSION['user_info'].'</a>';
else
echo '<A HREF="register.html">Login/Register</A>';
?>
</FONT></NAV>
</body>
</html>