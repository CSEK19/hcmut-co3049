<?php
$link = mysqli_connect("localhost", "root", "", "searchdb");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query ="SELECT * FROM province";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) > 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

?>