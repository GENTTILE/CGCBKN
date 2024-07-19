<?php
$conn = new mysqli("127.0.0.1:3306","root","","materiales");
	if($conn->connect_errno)
	{
		echo "No hay conexión: " . $conn -> connect_error;
	}
?>
