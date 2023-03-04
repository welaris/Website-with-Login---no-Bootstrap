<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_ubung';


$conn = mysqli_connect($server, $username, $password, $database);
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all values from the form data(input)
        $anrede =  $_REQUEST['anrede'];
        $vname = $_REQUEST['vname'];
        $nname =  $_REQUEST['nname'];
        $geburtstag = $_REQUEST['geburtstag'];
        $email = $_REQUEST['email'];
		$interessen = $checkedString;

         
        // Performing insert query execution			
        $sql = "SELECT * FROM kunde;";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){            
        }
        else {
            $msg="Kein Daten gefunden.";
        }        
?>