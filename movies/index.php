<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="db.php" method="post">

<h1> Thêm phim mới </h1>
Tên phim: <input type="text" name="film_name"><br><br>
Năm phát hành: 
<select name="film_year">
    <?php
    for($i=1990; $i<=2022;$i+=1){
    ?>
    <option value=" <?php echo $i; ?> ">
    <?php echo $i; ?>
    </option>
    <?php } ?>
</select>
<br><br>
Xếp hạng:
<input type="radio" name="rating" value="1"> 1
<input type="radio" name="rating" value="2"> 2
<input type="radio" name="rating" value="3"> 3
<input type="radio" name="rating" value="4"> 4
<input type="radio" name="rating" value="5"> 5

<br><br>
<input type="submit" value="Gửi">
<input type="reset" value="Nhập lại">
</form>

</body>

</html>
