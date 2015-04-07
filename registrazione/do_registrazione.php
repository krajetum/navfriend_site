<HTML>
<HEAD></HEAD>
<body>

<?php
$servername = "192.168.201.116";
$username = "navfriend";
$password = "navfriend";
$dbase = "navfriend";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$user = $_POST["username"];
$pass = $_POST["password"];
$email= $_POST["email"];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
echo "Connected successfully";
if(!mysql_select_db($dbase,$conn)) {
    die("Error connection database");
    }

$sql = "INSERT INTO utente (nome,cognome,email,password) VALUES (".$nome.",".$cognome.",".$email.",".$pass.");";

if(!mysqli_query($conn, $sql)) {
    die("Error on insert into database");
    }
?>

</body>