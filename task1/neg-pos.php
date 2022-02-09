<?php




if ($_POST) {
    $num1 = $_POST['Num1'];

    if ($num1 > 0) {
        $type =  'Number  is positive ';
    } elseif ($num1 < 0) {
        $type = 'Number  is negative ';
    } else {
        $type = "Not Negative or Positive ";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <title>Pos or neg number</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3 class="text-primary text-center h3 ">Find positive & negative number </h3>
            </div>
            <div class="offset-4 col-4">
                <form method="post">
                    <div class="form-group">
                        <label for="Num1">Num1</label>
                        <input type="number" name="Num1" id="num1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>


                    <div class="form-group">
                        <button name="output" class="btn btn-dark rounded"> Result</button>

                    </div>
                </form>

                <?php

                if (isset($type)) {
                    echo "<div class='alert alert-success'> $type </div>";
                }
                ?>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>