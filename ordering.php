
<?php

session_start();
if (isset($_POST['submit'])){
if(!empty($_SESSION['email'])) {
$qty1=$_POST['qty1'];
$qty2=$_POST['qty2'];
$qty3=$_POST['qty3'];
$qty4=$_POST['qty4'];
$qty5=$_POST['qty5'];
$qty6=$_POST['qty6'];
$qty7=$_POST['qty7'];
$qty8=$_POST['qty8'];
$qty9=$_POST['qty9'];
$qty10=$_POST['qty10'];
$qty11=$_POST['qty11'];
$qty12=$_POST['qty12'];
$email=$_SESSION['email'];
$sum=30*$qty1+60*$qty2+30*$qty3+180*$qty4+350*$qty5+200*$qty6+300*$qty7+250*$qty8+270*$qty9+90*$qty10+120*$qty11+260*$qty12;
$msg="Order placed successfully. Please make a payment of Rs ".$sum." by cash on successful delivery";
$conn = new mysqli("localhost","root","") or die("Connect failed: %s\n". $conn -> error);
mysql_select_db("registration") or die("couldn't find database");

$sql1="INSERT INTO orders(email,qty1,qty2,qty3,qty4,qty5,qty6,qty7,qty8,qty9,qty10,qty11,qty12)VALUES('$email','$qty1','$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9',,'$qty10','$qty11','$qty12');";
if(mysql_query($sql1))
{
echo '<script type="text/javascript"> alert("'.$msg.'")</script>';
}
else
{
echo "<script type='text/javascript'>alert('Could not place order');</script>";
}
}