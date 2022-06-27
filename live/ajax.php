<?php


include "db.php";


if (isset($_POST['search'])) {


   $name = $_POST['search'];
   $query = "SELECT Name FROM search WHERE Name LIKE '%$name%' LIMIT 5";
   $result = MySQLi_query($conn, $query);
   
   echo ' <ul>';
   while ($row = mysqli_fetch_assoc($result)) {
       ?>

   <li onclick='fill("<?php echo $row['Name']; ?>")'>
   <a>
       <?php echo $row['Name']; ?>
   </a>
   </li>
   <?php
}}
?>
</ul>