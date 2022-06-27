<?php 
$conn = mysqli_connect("localhost", "root", "", "autocomplete") or die("Error: " . mysqli_error($conn));
$stmt = mysqli_query($conn, "SELECT * FROM search");
while($row = mysqli_fetch_assoc($stmt)){
    echo $row['Name'];
    echo '<br>';
}
?>