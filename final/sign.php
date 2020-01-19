<?php
include "main.php"

$sql = "SELECT * FROM `sign in` LIMIT 0, 30 ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Log In: " . $row["Username"]. " - : " . $row["Password"]. "  "<br>";
    }
} else {
    echo "0 results";
}

?>