<?php
require 'config.php';

// Guardar los datos recibidos en variables:
$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$apelidos = $_POST['apelidos'];
$email = $_POST['email'];
$profesion=$_POST['profesion'];
$concello=$_POST['concello'];


 
// echo $esquema '<br>';

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


 $sql = "INSERT INTO  asinantes ( tipo, nome, apelidos, email, profesion, concello) VALUES( '$tipo', '$nome', '$apelidos', '$email', '$profesion', '$concello') ";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


//Exemplo captcha 
//https://developers.google.com/recaptcha/docs/display

?>
