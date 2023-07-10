<?php 

define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($conn, 'utf8');

$First_Name = $_REQUEST['First_Name'];
$Last_Name = $_REQUEST['Last_Name'];
$Email_ID = $_REQUEST['Email_ID'];
$Password_u = $_REQUEST['Password_u'];
$Confirm_Password = $_REQUEST['Confirm_Password'];

$sql = "INSERT INTO registration (First_Name, Last_Name, Email_ID, Password_u, Confirm_Password)
  VALUES ('$First_Name', '$Last_Name', '$Email_ID', '$Password_u', '$Confirm_Password')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
} else {
  echo "Please enter the values" . $conn->error;
}

$conn->close();
?>


