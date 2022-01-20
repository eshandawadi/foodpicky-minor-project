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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text],input[type=number],input[type=email],input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
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
	<h2>Contact Form</h2>

<div class="container">
  <form action="dbcontact.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.."required>

    
     <label for="number">Phone</label>
    <input type="number" id="number" name="number" placeholder="Your number is..">
    <label for="gender">Gender</label>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male<br><br>

    <label for="country">Place</label>
    <select id="place" name="place">
      <option value="kathmandu">kathmandu</option>
      <option value="canada">Lalitpur</option>
      <option value="Bhaktapur">Bhaktapur</option>
    </select>

    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">
  </form>
</div>



</body>
</html>