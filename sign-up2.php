<html>
<body>

<?php
$servername = "127.0.0.1";
$username = "0210972769";
$password = "mypassword";
$dbname = "0210972769_verkefni5vef";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO notendur (id, nafn, netfang, password)
VALUES ('$_POST[id]','$_POST[nafn]','$_POST[netfang]','$_POST[password]')";


if (mysqli_query($conn, $sql)) {
    echo "Nýr notandi búinn til";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
