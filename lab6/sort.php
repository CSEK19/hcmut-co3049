<?php
if (isset($_POST['action'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "searchdb";
    $select = $_POST['submit'];
    

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    if($select == 'Code')
        $sql = "SELECT * FROM province";
    else
        $sql = "SELECT * FROM province ORDER BY name ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["id"]. " - " . $row["name"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();

    }
?>            