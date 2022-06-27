<!DOCTYPE html>
<html>
<head></head>
<body>
<?php 
error_reporting(0);
$error = 0;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $film_name = $_POST['film_name'];
    $film_year = $_POST['film_year'];
    $rating = $_POST['rating'];
    echo $film_name;
    echo $film_year;
    echo $rating;

    $conn = mysqli_connect("localhost", "root", "", "movies");
    if(!$conn){
        die("Could not connect: " . mysqli_error($conn));
    }
    else{
        echo "<br>Connected to database";
    }

    if($film_name != "" && $film_year != "" && $rating != "")
    {
        $query = "INSERT INTO info VALUES('$film_name', '$film_year', '$rating')";
        $result = mysqli_query($conn, $query);
        $error = 0;
        mysqli_close($conn);
    }
    else{
        $error = 1;
        echo "<br>Lỗi dữ liệu";
    }
}
?>
</body>
</html>