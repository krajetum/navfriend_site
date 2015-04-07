<?php



$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$pass = $_POST["password"];
$email= $_POST["email"];




$sql = "INSERT INTO utente (nome,cognome,email,password) VALUES ('".$nome."','".$cognome."','".$email."','".$pass."')";

if(!mysqli_query($conn, $sql)) {
    die("Error on insert into database");
}

?>

