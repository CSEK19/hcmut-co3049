<!DOCTYPE html>
<html lang="en">

<head>
    <title>eStore</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Logo -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="assets/css/template.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
</head>

<body>
    <div id="App">
        <?php
        include('header.php');
        $page = isset($_GET['page']) ? $_GET['page'] : "home";
        switch ($page) {
            case "home":{
            include ("home.php");
                break;
            }
            case "login": {
                include("login.php");
                break;
            }
            case "phone":{
                include('phone.php');
                break;
            }
            case "camera":{
                include('camera.php');
                break;
            }
            case "laptop":{
                include('laptop.php');
                break;
            }
        }
        include("footer.php")
        ?>
    </div>
    <!-- End App -->
    
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/template.js"></script>

</body>
<!-- end Body -->


</html>
<!-- End HTML -->