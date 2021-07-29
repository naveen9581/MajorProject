<?php

session_start();
header('location:menu.html');

$con = mysqli_connect('localhost','root','Narasimha#777');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$email = $POST['email']
$pass = $_POST['password'];

$s = " select * from usertable where name='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" User name already taken";
}
else{
	$reg = " insert into usertable(name, email, password) values ('$name' , '$email' , '$pass')";
	mysqli_query($con, $reg);

}


?>