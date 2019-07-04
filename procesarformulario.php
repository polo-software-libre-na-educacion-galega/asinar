<?php
// Guardar los datos recibidos en variables:
$tipo = $_POST['tipo'];
$nome = $_POST['nome'];
$apelidos = $_POST['apelidos'];
$email = $_POST['email'];
$profesion=$_POST['profesion'];
$concello=$_POST['concello'];


//$email = 'ccu';
//$telefono = $_GET['telefono'];
//$mensaje = $_GET['mensaje'];
 //http://localhost/manifesto/procesarformulario.php?nome=pablo&email=x@x.com&telefono=6177
 
 
 echo "ola mundo";
 
 
//Conexion e inserción BD  
$servername = "localhost";
$database = "manifesto";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}


echo "Connected successfully";

 $sql = "INSERT INTO manifesto.asinantes ( tipo, nome, apelidos, email, profesion, concello) VALUES( '$tipo', '$nome', '$apelidos', '$email', '$profesion', '$concello') ";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


//Exemplo captcha 
//https://developers.google.com/recaptcha/docs/display

?>
