<?php


if ($_GET) {
    $num1 = $_GET['Num1'];
    $num2 = $_GET['Num2'];
    
    
    switch ($_GET['operate']) {
        case 'add':
             $result = $num1 + $num2;
            break;
        case 'sub':
            $result = $num1 - $num2;
            break;
        case 'divide':
            $result = $num1 / $num2;
            break;
        case 'multi':
             $result = $num1 * $num2;
            break;
        case 'power':
             $result = $num1 ** $num2;
            break;
        case 'module':
             $result = $num1 % $num2;
            break;
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <title>calculator</title>
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
                <h1 class="text-danger text-center h1 ">Calculator </h1>
            </div>
            <div class="offset-4 col-4">
                <form >
                    <div class="form-group">
                        <label for="Num1">Num1</label>
                        <input type="number" name="Num1" id="num1" class="form-control" placeholder=" enter num1" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="Num2">Num2</label>
                        <input type="number" name="Num2" id="num2" class="form-control" placeholder="enter num2" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="operator">Operator</label>
                        <select name="operate" class="form-control" id="operate">
                            <option value=" " selected>  </option>
                            <option value="add">add</option>
                            <option value="sub">sub</option>
                            <option value="divide">divide</option>
                            <option value="multi">multi</option>
                            <option value="power">power</option>
                            <option value="module">module</option>


                        </select>
                    </div>
                    <div class="form-group">
                        <button name="output" class="btn btn-primary rounded"> Calc</button>

                    </div>
                </form>

                <?php

                if (isset($result)) {
                    echo "<div class='alert alert-danger'> $result </div>";
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