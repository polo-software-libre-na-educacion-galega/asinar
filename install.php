<?php
  
require 'config.php';
  
 
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


 $sql = "CREATE TABLE asinantes (
	id INT NOT NULL auto_increment primary key,
	`data` DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
	tipo INT NOT NULL,
	nome varchar(100) NOT NULL,
	apelidos varchar(300) NOT NULL,
	email varchar(100) NOT NULL,
	profesion varchar(100) NULL,
	concello varchar(100) NULL
) ";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>