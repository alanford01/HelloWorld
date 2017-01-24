<!DOCTYPE html>
<html>
<body>

<h1>Evidencija</h1>

<?php

$servername = "localhost";
$username = "moduleni_admin";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID_EGGS, EGGS_IN, EGGS_OUT, DATE_MODIFY FROM `moduleni_evidencija`.`eggs` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Date: " . $row["DATE_MODIFY"]. " - In: " . $row["EGGS_IN"]. " -Out: " . $row["EGGS_OUT"]. "<br>";
    }
} else {
    echo "0 results <br>";
	//echo "i.T." $result;
}
echo date("Y.m.d");

$conn->close();


?>




</body>
</html>
