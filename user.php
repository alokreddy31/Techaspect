<!DOCTYPE html>
<html>
<body>
    
    <h3>Existing Plans are
    </h3>
    
    
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT pname,mrental,callcharges,smscharges,datacharges,roamingcharges,freeinternet,freesms,freecalls FROM plans";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["pname"]. " - monthlyrental: ". $row["mrental"]. " - callcharges: ". $row["callcharges"]. " - datacharges: ". $row["datacharges"]. " - Roaming charges: ". $row["roamingcharges"]. " - Freeinternet: ". $row["freeinternet"]. " - Free calls: ". $row["freecalls"].  "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>
