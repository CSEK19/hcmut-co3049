<?php
    $conn = mysqli_connect("localhost","root","") or die("Could not connect: " . mysqli_error($conn));
    mysqli_select_db($conn, "movies");
    $result = mysqli_query($conn, "SELECT * FROM info");
    while ($row = mysqli_fetch_array($result)){
        echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
        echo "<br>";
    }
    mysqli_close($conn);
?>