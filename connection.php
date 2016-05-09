<?php
function Connection(){
	if(!($conn = mysqli_connect("127.0.0.1","root",""))){
		echo "Error";
		exit();
	}
	if(!mysqli_select_db($conn, 'test')){
		echo "Error selecting database";
		exit();
	}
	return $conn;	
}
?>