<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
$Email_ID = $_POST['Email_ID'];
$Password_u = $_POST['Password_u'];
require_once('DB_conn.php');
$sql= "SELECT * FROM registration WHERE Email_ID = '$Email_ID' AND Password_u = '$Password_u' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
    header("Location: home.php");
}else{
  echo '<script>alert("Login Failed");history.go(-1);</script>';
}
}
?>