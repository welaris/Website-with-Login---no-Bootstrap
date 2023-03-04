<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php_ubung';

$checked = "";
$checkedString="";
$flag = false;

if (isset($_POST['checkbox'])) {
        $checked = $_POST['checkbox'];
        // foreach($checked as $result) {
            // echo $result ."\n";
        // }
        $checkedString = implode(",", $checked);
    }

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
        $password = $_REQUEST['passwort'];
        $geburtstag = $_REQUEST['geburtstag'];
        $email = $_REQUEST['email'];
		$interessen = $checkedString;

        $encrypted_pwd = md5($password);
        // $hash = password_hash($passwort, 
        //   PASSWORD_DEFAULT);

         
        // Performing insert query execution			
        $sql = "INSERT INTO kunde (anrede, vorname, nachname, geburtstag, email, interessen, password) 
        VALUES ('$anrede', '$vname', '$nname', '$geburtstag', '$email', '$interessen', '$encrypted_pwd')";
        
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Daten wurden erfolgreich gespeichert.");</script>';
        } else{
            echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        //header('Location: Home.html');
        ?>
        <script>window.location.replace("Home.html");</script>