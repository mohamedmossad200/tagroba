<?php 

$host='localhost';
$username='root';
$password='';
$dbname='login';
$m=new mysqli($host,$username,$password,$dbname);
$m->set_charset('utf8');

$z1=$_POST['z1'];
$z2=$_POST['z2'];
$s="select * from LOGINUSER where email='$z1' AND pass='$z2' ";
$r=$m->query($s);

while($a=$r->fetch_assoc())
{

$c=$r->num_rows;

}
if($c >0){
header('location://localhost/website/index.html');


}else{

    header('location://localhost/website/addlogin.html');
}

?>