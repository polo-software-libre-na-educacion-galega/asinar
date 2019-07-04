<?php
//Conexion e inserción BD  
$servername = "localhost";
$database = "manifesto";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT nome, apelidos, profesion, concello FROM asinantes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  " . $row["nome"]. "  " . $row["apelidos"]. ", " .  $row["profesion"]." - ".$row["concello"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>