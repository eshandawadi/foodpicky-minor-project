 <?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	*{
	margin: 0px;
	padding: 0px;
	font-family: sans-serif;

}
nav{
	width:100%;
	background:#00316b;

}
ul{
	width:80%;
	margin: 0 auto;
	padding: 0;
}
ul li{
	list-style: none;
	display: inline-block;
	padding:20px;

}
ul li:hover{
	background: #e91e63;
}

 ul li a{
 	color:#fff;
 	text-decoration: none;
 }
  .toggle{
  width:100%;
  padding: 10px 20px;
  background:#001f44;
  text-align:right;
  box-sizing: border-box;
  color: #fff;
  font-size: 30px;
    display: none;   
 }
@media(max-width:768px ){
  .toggle{
    display:block;
  }

ul{
  width:100%;
  display: none;

}
ul li{
  display: block;
  text-align: center;

}
.active{
  display: block;
}
}
.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}

.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
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
  

  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="register.php">

    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>