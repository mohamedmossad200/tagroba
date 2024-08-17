<?php 
if(empty($_POST['email'])or empty($_POST['phone']) or empty($_POST['pass'])){

echo"<script type='text/javascript'>alert('الرجاء املاء جميع الحقول')</script>";
echo"<script>window.location.assign('http://localhost/website/addlogin.html')</script>.";

}else{
$host='localhost';
$username='root';
$password='';
$dbname='login';
$m=new mysqli($host,$username,$password,$dbname);
$m->set_charset('utf8');


$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$s="INSERT INTO LOGINUSER (email,phone,pass)VALUES('$email','$phone','$pass')";
$r=$m->query($s);
header('http://localhost/website/index.html');
;}
?>