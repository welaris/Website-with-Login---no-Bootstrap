<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style.css">
    <nav>
        <nav><br>
            <a class="menuText" href="Home.html">Home</a>
            <a class="menuText" href="Index.html">Login</a>
			<a class="menuText" href="Test.php">Test</a>
            <a class="menuText" href="data4.php">Daten anzeigen</a>
        </nav><br>
</head>
<body>
<div class="formularBody">
<h3>Daten</h3><br><br><br>   
<?php 
echo '<script>alert("Daten wurden erfolgreich gespeichert.");</script>';
?>
<script>window.location.replace("Home.html");</script>
</div><br><br>
</body>
</html>