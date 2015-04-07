<?php
    $servername = "192.168.201.116";
    $username = "navfriend";
    $password = "navfriend";
    $dbase = "navfriend";




    $errore = "false";
    $error_description=array();
    $counter = 0;

    if(isset($_POST["nome"])){
        if(empty($_POST["nome"])){
        //    $_REQUEST["nome_empty"] = "y";
            $error_description[$counter] = "Inserisci nome utente ";
            $counter++;

            $errore="true";
        }
    }

    if(isset($_POST["cognome"])){
        if(empty($_POST["cognome"])) {
        //    $_REQUEST["cognome_empty"] = "y";
            $error_description[$counter] = "Inserisci cognome utente ";
            $counter++;
            $errore="true";

        }
    }

    if(isset($_POST["password"])){
        if(empty($_POST["password"])){
        //    $_REQUEST["pass_empty"] = "y";
            $error_description[$counter] = "Inserisci password utente ";
            $counter++;
            $errore="true";

        }
    }

    if(isset($_POST["email"])){
        if(empty($_POST["email"])){
        //    $_REQUEST["email_empty"] = "y";
            $error_description[$counter] = "Inserisci email utente ";
            $counter++;

            $errore="true";
        }else{
            $mail = $_POST["email"];
        }
    }





    if($errore=="true"){

        include("error.php");
    }else{

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if(!mysqli_select_db($conn, $dbase)) {
            die("Error connection database");
        }


        $count_user = "SELECT * FROM utente WHERE email='".$mail."';";

        $result_set = mysqli_query($conn, $count_user) or die(mysqli_error($conn));

        if(mysqli_num_rows($result_set)>0){
            mysqli_close($conn);
            $error_description[$counter] = "mail già esiste";
            include("error.php");

        }else{

            include("test.php");
            mysqli_close($conn);
            include("success.php");
        }


    }


?>