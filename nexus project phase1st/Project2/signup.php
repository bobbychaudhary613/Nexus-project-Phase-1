<?php
$p11=$_POST['un'];
$p1=$_POST['up'];

$con=mysqli_connect("localhost","root","","systemlog");
if(!$con)
{
echo mysqli_connect_error();
}
else
{
$q="insert into logtab values( '$p11','$p1')";
mysqli_query($con,$q);
$r=mysqli_affected_rows($con);
if($r>0)
echo "You are Successfully registered";
else
echo "Some problem is occured";
}
?>

