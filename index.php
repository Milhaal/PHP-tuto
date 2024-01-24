<?php
$servername = "mysql-phpauto.alwaysdata.net";
$username = "phpauto";
$password = "Nitrosmp2103@";
$dbname = "phpauto_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to fetch user and game data
$sql = "SELECT user_name, game_name, game_details 
        FROM User p
        JOIN GAME ON user_id = user_id";

$result = $conn->query($sql);

if ( $result->num_rows < 11 || $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "User Name: " . $row["user_name"]. " <br> Game Name: " . $row["game_name"]. " <br> Details: " . $row["game_details"]. "<br><br><br>";
    }
} else {
    echo "Aucun Parametres";
}

$conn->close();
?>
