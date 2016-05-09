<?php

$name = $_POST['name'];
$al = $_POST['al'];
$wbs = $_POST['wbs'];
$hs = $_POST['hs'];

include("connection.php");
$conn = Connection();

$sql = "INSERT INTO patients ".
       "(name, al, wbs, hs) ".
       "VALUES ".
       "('$name','$al','$wbs','$hs')";

if(mysqli_query($conn, $sql)){
	echo 'New patient created!';
}else{
	echo mysqli_error($conn);
}

mysqli_close($conn);

?>