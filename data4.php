<html>
<head>
<div class="header">
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style.css">
    <nav>
        <nav><br>
            <a class="menuText" href="Home.html">Home</a>
            <a class="menuText" href="Index.html">Login</a>
			<a class="menuText" href="Test.php">Test</a>
            <a class="menuText" href="data4.php">Daten anzeigen</a>
        </nav><br>
</div>
</head>
<body>
    <br><br><br><br><br>
<div class="formularBody">
<h3>Daten</h3><br><br><br>   
<?php 
$username = "root"; 
$password = ""; 
$database = "php_ubung"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM kunde";


echo "<table class='phpTable', border='1'> 
      <tr> 
          <th>Anrede</td> 
          <th>Vorname</td> 
          <th>Nachname</td> 
          <th>Geburtstag</td>
          <th>E-Mail</td> 
          <th>Interessen</td> 
      </tr>";

    //   border="5" border-color:"white" cellspacing="5" cellpadding="5"

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["anrede"];
        $field2name = $row["vorname"];
        $field3name = $row["nachname"];
        $field4name = $row["geburtstag"];
        $field5name = $row["email"];
        $field6name = $row["interessen"]; 


        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>