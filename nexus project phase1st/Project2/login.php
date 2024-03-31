<?php
session_start();
$p11=$_POST['un'];
$p1=$_POST['up'];

$con=mysqli_connect("localhost","root","","systemlog");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="select * from logtab where usernames='$p11' and passworduser='$p1'";

$res=mysqli_query($con,$q); 

$r=mysqli_fetch_row($res);   

if($r)
	
{

	$_SESSION['p11']=$p11;
	
header("location: home.php");
}
else
echo "Email or password is incorrect";
}
?>
