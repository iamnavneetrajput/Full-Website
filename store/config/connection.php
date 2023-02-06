<?php

// $connection = mysqli_connect("localhost","u888604842_connection","#N@vneet<206326.@>","u888604842_leo");
$connection = mysqli_connect("localhost","root","","store");
if ($connection){
    include './index.php';
}

else{
    echo  "connection faild";
}


mysqli_select_db($connection, 'store');

$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$email = $_POST['email'];
$phonenumber = $_POST['phone_number'];
$catagory = $_POST['catagory'];
$message = $_POST['message'];

$data = "INSERT INTO contact (FIRSTNAME, LASTNAME, EMAIL, NUMBER, CATAGORY, MESSAGE ) VALUES('$firstname', '$lastname', '$email', '$phonenumber', '$catagory', '$message')";

mysqli_query($connection,$data);


?>



