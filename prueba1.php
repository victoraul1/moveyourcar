



<!DOCTYPE html>
<html>
<body>

<?php
$servername = "victoraul.netfirmsmysql.com";
$username = "jesus";
$password = "123456";
$dbname = "dbalertas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id_usuario, id, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id_usuario"]. " - Name: ". $row["id"]. " " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>