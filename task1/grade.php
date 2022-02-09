<?php




if ($_POST) {

    $subject1 = $_POST['mark1'];
    $subject2 = $_POST['mark2'];
    $subject3 = $_POST['mark3'];
    $subject4 = $_POST['mark4'];
    $subject5 = $_POST['mark5'];

    if ($subject1 <= 50 && $subject2 <= 50 && $subject3 <= 50 && $subject4 <= 50 && $subject5 <= 50) {
        $percentage =  (($subject1 + $subject2 + $subject3 + $subject4 + $subject5) / 250) * 100;
    }
    if ($percentage >= 0.9 * 100) {
        $grade = 'A';
    } elseif ($percentage >= 0.8 * 100) {
        $grade = 'B';
    } elseif ($percentage >= 0.7 * 100) {
        $grade = 'C';
    } elseif ($percentage >= 0.6 * 100) {
        $grade = 'D';
    } elseif ($percentage >= 0.4 * 100) {
        $grade = 'E';
    } elseif ($percentage < 0.4 * 100) {
        $grade = 'F';
    } else {
        $grade = 'Not Accepted grade';
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <title>Marks for five subjects</title>
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
                <h3 class="text-primary text-center h3 "> Find Grade and Percentage </h3>
            </div>
            <div class="offset-4 col-4">
                <form method="post">
                    <div class="form-group">
                        <label for="sub1">Subject1: Physics</label>
                        <input type="number" name="mark1" id="sub1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="sub2">Subject2: Chemistry</label>
                        <input type="number" name="mark2" id="sub2" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="sub3">Subject3: Biology</label>
                        <input type="number" name="mark3" id="sub3" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="sub4">Subject4: Mathematics </label>
                        <input type="number" name="mark4" id="sub4" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="sub5">Subject5: Computer</label>
                        <input type="number" name="mark5" id="sub5" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <button name="output" class="btn btn-dark rounded"> Percentage</button>

                    </div>
                </form>

                <?php

                if (isset($percentage, $grade)) {
                    echo "<div class='alert alert-success'> percentege is : $percentage% </div>";
                    echo "<div class='alert alert-success'>  Grade is :  $grade </div>";
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