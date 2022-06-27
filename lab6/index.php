<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <script>
    $(document).ready(function () {
        $('.search-box input[type="search"]').on("keyup input", function () {
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("live_search.php", { term: inputVal }).done(function (data) {
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });

        $(document).on("click", ".result label", function () {
            $(this).parents(".search-box").find('input[type="search"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
    </script>
    <link rel="stylesheet" href="mystyle.css">


<?php
include("live_search.php");
include("live_select.php");
?>

</head>
<body>
    <a>
        <button type="button"  class="btn btn-info btn-lg" id="btn-back-to-top" style="z-index:1">
        <i class="fas fa-chevron-up"></i>
        </button>
    </a>
    <div class="container p-5 my-5 border border rounded">
        <form>
        <fieldset>

            <legend class = "text-primary">
                <h1>Search Form Lab</h1>
            </legend>

            <div class="mt-4 search-box">
                <label>Province search</label>
                <input type="search" class="form-control rounded" placeholder="Enter name of the province, i.e. Dong Nai" aria-label="Search"
                    aria-describedby="search-addon" />
                <div class="result container"></div>
            </div>


            <div class="mt-4">

                <label>Province select</label>


                <br>
                <div class="checkbox" style="display: inline-block;">
                    <label class="unselectable">
                        <input id="check_code" type="checkbox" checked>&nbsp;Sort by Province Code
                    </label>
                </div>
                &nbsp;&nbsp;&nbsp;
                <div class="checkbox" style="display: inline-block;"><label class="unselectable"><input id="check_alphabet" type="checkbox">&nbsp;  Sort by Alphabet</label></div>



                <select class="form-select form-control rounded" aria-label="Select">
                <label>Province select</label>

                    <option selected>Select province</option>

                    <?php 
                        foreach ($options as $option) {
                    ?>
                            <option><?php echo $option['id'] . ' - ' . $option['name']; ?> </option>
                    <?php 
                        }
                    ?>
                </select>
            </div>
            
            <div class="mt-4 d-grid gap-2 text-center w-auto">
                <button type="button" class="btn btn-primary btn-lg me-2"">Submit</button>
                <button class="btn btn-danger btn-lg" type="reset" value="Reset">Clear</button>

            </div>
        </fieldset>
        </form>
    </div>

    <div class="container mt-4 " style="height: 1000px">
        <legend class="text-primary text-center">
            <h1 class="display-4">Content</h1>
        </legend>

        <ul class="nav nav-pills nav-justified">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" aria-current="page" href="#active">Tab 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab2">Tab 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab3">Tab 3</a>
        </li>

            <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab4">Tab 4</a>
        </li>
        </ul>


        <div class="tab-content">
            <div id="active" class="tab-pane in active">
                <h1 class ="display-5 text-center">A</h1>
                <p>Lorem ipsum dolor sit amet, pri ea autem suscipit incorrupte, ei duo eros urbanitas. Adhuc primis recusabo an vel. Qui duis recteque an, vim unum illum ea, est ex mucius vocent. Id qui urbanitas quaerendum theophrastus. Solum persecuti nec id, id viderer deleniti vim, no elit sanctus veritus duo. Ei liber facete usu, ius populo euripidis reformidans eu, iusto persecuti efficiendi est ut. Vix incorrupte omittantur dissentiet id. Qui ne liber clita legendos, ius fierent dolores adipisci et, velit explicari molestiae nam ei. Tale errem aperiri has id, pro an malis voluptatum neglegentur.</p>
                <div class="mt-4 d-grid gap-2 text-center w-auto">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <input type="hidden" name="action" value="submit" />
                        <input id="tea-submit" type="submit" class="btn btn-outline-primary" name="submit" value="Code">
                        <input id="coffee-submit" type="submit" class="btn btn-outline-primary" name="submit" value="Name">
                    </form>
                </div>
                
                <br>
                <div class="card card-body" id="my-list">

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
                </div>
            </div>

            <div id="tab2" class="tab-pane">
                <h1 class ="display-5 text-center">B</h1>
                <p>Labitur quaeque nec ei, te quem tamquam est. Vix an ignota signiferumque, debitis probatus assentior an pro. Est at choro bonorum nominavi, quis legimus invenire ex his. Ridens explicari philosophia te mei, in pri zril partem, oporteat maluisset patrioque eum id. Usu te adipisci intellegam, accusata vituperatoribus vim ei. Dolores ponderum eam te, eu mel scaevola quaerendum, quidam partiendo in vix. Ius animal accusam evertitur ut. At integre iracundia voluptaria sit, nam ei agam natum audire. Tale eloquentiam ut nec. Ea sed option ullamcorper, id omnium deterruisset usu, quem omnis noluisse ea pri.</p> 
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Read more</a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-pane">
                <h1 class ="display-5 text-center">C</h1>
                <p>Phasellus vitae hendrerit libero. Nam porttitor, diam eget tincidunt tincidunt, nunc purus facilisis tellus, vel aliquam nisl justo et nisi. Nunc massa ex, sodales sed molestie quis, pharetra vitae arcu. Praesent vitae gravida dolor, id dapibus arcu. Aliquam viverra lorem in consectetur tincidunt. Vestibulum posuere iaculis consequat. Vestibulum condimentum cursus ipsum non lacinia. Suspendisse potenti. Praesent id neque tincidunt, sagittis est consectetur, varius est. Morbi bibendum sollicitudin feugiat. Nunc placerat mattis sem, sit amet interdum nulla semper vel. Nunc scelerisque, augue quis faucibus iaculis, ligula nibh dictum odio, nec volutpat lacus felis in purus. Integer facilisis mattis gravida. In gravida blandit tellus, laoreet porta ante eleifend non. Phasellus pharetra ante id lectus malesuada, vitae feugiat magna consequat.</p>
            </div>
            <div id="tab4" class="tab-pane">
                <h1 class ="display-5 text-center">D</h1>
                <p>Aliquam porta bibendum ex, ac rutrum ipsum placerat sed. Cras pretium libero massa. Integer nec ligula aliquam velit rutrum iaculis tempor in ligula. Aenean id libero ultrices, molestie lectus dapibus, cursus ex. Ut rhoncus ipsum id ipsum finibus congue. Quisque tempus velit eu erat accumsan accumsan. Integer rutrum, massa sed tempor convallis, purus ex euismod erat, a placerat sem ligula non mauris. Vestibulum est tellus, tincidunt vel placerat non, dignissim non urna. Praesent a sagittis mauris. Integer velit mi, consequat pellentesque dapibus in, lacinia ac lectus. Integer sed consectetur neque.</p>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start bg-light text-muted">
          <div class="text-center p-4" style="">© Trần Tiến Phát 2022. All Rights Reserved.
         </div>
    </footer>


    <script>
        var maxWidth = 0;
        $('.btn').each(function(index, element) {
            var curWidth = $(element).width();
            if (maxWidth < curWidth ) {
                maxWidth = curWidth;
            }
        });

        $('.btn').width(maxWidth);
    </script>

    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction() {
            if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
            }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script>
    //     form.find('button').on('click',function(){
    //     var form,url,data;    
    //     form = $('form');
    //     url = form.attr('action');
    //     data = 'sort='+ $(this).val();

    // $.ajax({
    //     url:url,
    //     data:data,
    //     type:'POST',
    //     success:function(data){
    //         alert(data) 
    //     }
    // })

    // })
    </script>


</body>
</html>