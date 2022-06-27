<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

<?php
include("live_search.php");
include("live_select.php");
?>

</head>
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


</body>
</html>