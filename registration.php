<?php
$path = mysqli_connect("localhost","root","","imasha_registration");

$FirstName = $_REQUEST['first_name'];
$LastName = $_REQUEST['last_name'];
$Email = $_REQUEST['email'];
$Paaword = $_REQUEST['password'];
$ConfirmPaaword = $_REQUEST['confirm_password'];

$sql = "insert into table_info values ('$FirstName', '$LastName', '$Email', '$Paaword', '$ConfirmPaaword')";

if(ISSET($_POST['register'])){
     if(mysqli_query($path,$sql)){
          echo 'Registraiton Successful';
     }
}





?>