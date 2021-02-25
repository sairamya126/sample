<?php
$conn = mysqli_connect("localhost","root","") or die("Could not connect");
mysqli_select_db($conn,"registration") or die("unable to connect server".mysqli_error());
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$password1 = $_POST['pass'];
$password = md5($password1);
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

$query = "INSERT INTO reg(firstname,lastname,username,pass,email,dob,gender) VALUES('$fname','$lname','$uname','$password','$email','$dob','$gender')";
mysqli_query($conn,$query);
header("location:home.html");

?>