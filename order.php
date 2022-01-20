
<!DOCTYPE html>
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
input[type=submit]:hover {
  background-color: #45a049;
  color: red;
}
input[type=submit]{
  background-color: #45a049;
}
table{border-color:white;height:90%;}
img{border-color:white}

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


<script type="text/javascript">
  function subtractQty(qty){
    if(qty.value - 1 < 0)
      return;
  else
  qty.value--;
  }
  function chk()
  {
    var qty1=document.getElementById("qty1");
    var qty2=document.getElementById("qty2");
    var qty3=document.getElementById("qty3");
    var qty4=document.getElementById("qty4");
    var qty5=document.getElementById("qty5");
    var qty6=document.getElementById("qty6");
    var qty7=document.getElementById("qty7");
    var qty8=document.getElementById("qty8");
    var qty9=document.getElementById("qty9");
    var qty10=document.getElementById("qty10");
    var qty11=document.getElementById("qty11");
    var qty12=document.getElementById("qty12");
    
    if((qty1.value=='' && qty2.value=='' && qty3.value=='' && qty4.value=='' &&qty5.value=='' && qty6.value=='' && qty7.value=='' && qty8.value=='' &&qty9.value=='' &&qty10.value=='' &&qty11.value=='' &&qty12.value=='')||(qty1.value=='0' && qty2.value=='0' && qty3.value=='0' && qty4.value=='0' && qty5.value=='0' && qty6.value=='0' && qty7.value=='0' && qty8.value=='0' && qty9.value=='0' &&qty10.value=='0' &&qty11.value=='0' &&qty12.value=='0' ))
    {
      alert("Please select atleast 1 item");
      return false;
    }
    return true;  
  }
</script>
<form action="order.php" name="orderform" method="post">
<table cellspacing="5" cellpadding="2" align="center">
<caption><font size="5"><U>ORDER HERE</U></font></caption>
<tr><td>
<img src="gulab_jamun.jpg" width="300" height="200" border="5"><br/>
<font size="4">Gulab Jamun</font>
&nbsp;&nbsp;<input type='text' name='qty1' id='qty1' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty1").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty1);' value='-'/>
<font size="4">Rs. 30</font>
</td>
<td>
<img src="indian_cuisine.jpg" width="300" height="200" border="2"><br/>
<font size="4">Samosa</font>
&nbsp;&nbsp;<input type='text' name='qty2' id='qty2' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty2").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty2);' value='-'/>
<font size="4">Rs. 60</font>
</td>
<td>
<img src="plain_naan.jpg" width="300" height="200" border="2"><br/>
<font size="4">Plain Naan</font>
&nbsp;&nbsp;<input type='text' name='qty3' id='qty3' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty3").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty3);' value='-'/>
<font size="4">Rs. 30</font>
</td>
</tr>
<tr>
<td>
<img src="pulav.jpg" width="300" height="200" border="2" ><br/>
<font size="4">Pulav</font>
&nbsp;&nbsp;<input type='text' name='qty4' id='qty4' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty4").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty4);' value='-'/>
<font size="4">Rs. 180</font>
</td><td>
<img src="pizza.jpg" width="300" height="200" border="2"><br/>
<font size="4">Pizza</font>
&nbsp;&nbsp;<input type='text' name='qty5' id='qty5' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty5").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty5);' value='-'/>
      <font size="4">Rs. 350</font>
</td>
<td>
<img src="paneer-bhurji.jpg" width="300" height="200" border="2"><br/>
<font size="4">Paneer Bhurji</font>
&nbsp;&nbsp;<input type='text' name='qty6' id='qty6' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty6").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty6);' value='-'/>
<font size="4">Rs. 200</font>
</td>
</tr>
<tr>
<td>
<img src="prawn_biryani.jpg" width="300" height="200" border="2"><br/>
<font size="4">Prawn Biryani</font>
&nbsp;&nbsp;<input type='text' name='qty7' id='qty7' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty7").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty7);' value='-'/>
<font size="4">Rs. 300</font>
</td><td>
<img src="fish.jpg" width="300" height="200" border="2"><br/>
<font size="4">Fried Pomfret</font>
&nbsp;&nbsp;<input type='text' name='qty8' id='qty8' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty8").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty8);' value='-'/>
<font size="4">Rs. 250</font>
</td>
<td>
<img src="mutton_dum_biryani.jpg" width="300" height="200" border="2"><br/>
<font size="4">Mutton Biryani</font>
&nbsp;&nbsp;<input type='text' name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty9").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty9);' value='-'/>
<font size="4">Rs. 270</font>
</td>
</tr>
<tr><td>
<img src="chowmein.jpg" width="300" height="200" border="5"><br/>
<font size="4">Chowmein </font>
&nbsp;&nbsp;<input type='text' name='qty10' id='qty10' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty10").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty10);' value='-'/>
<font size="4">Rs. 90</font>
</td>
<td>
<img src="Fried momo.jpg" width="300" height="200" border="2"><br/>
<font size="4">fried momo</font>
&nbsp;&nbsp;<input type='text' name='qty11' id='qty11' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty11").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty11);' value='-'/>
<font size="4">Rs. 120</font>
</td>
<td>
<img src="burger1.jpg" width="300" height="200" border="2"><br/>
<font size="4"> burger combo</font>
&nbsp;&nbsp;<input type='text' name='qty12' id='qty12' size="1" maxlength="2" class="qty" style="width: 25px;"/>
      <input type='button' name='add' onclick='javascript: document.getElementById("qty12").value++;' value='+'/>
      <input type='button' name='subtract' onclick='javascript: subtractQty(qty12);' value='-'/>
<font size="4">Rs. 260</font>
</td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr><td colspan="200"><input type="submit" name="submit" value="Order now!!!"  class="button" onclick="return chk()"></input></td></tr>
</table>
</form>
</body>
</html>