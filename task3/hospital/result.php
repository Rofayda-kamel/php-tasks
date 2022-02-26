

<?php


if (isset($_POST['enter'])) {

    $one = $_POST['one'];
    $two = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $five = $_POST['five'];
    if ($one == 'bad') {
        $one = 0;
    } elseif ($one == 'good') {
        $one = 3;
    } elseif ($one == 'very good') {
        $one = 5;
    } elseif ($one == 'excellent') {
        $one = 10;
    }
    

    if ($two == 'bad') {
        $two = 0;
    } elseif ($two == 'good') {
        $two = 3;
    } elseif ($two == 'very good') {
        $two = 5;
    } elseif ($two == 'excellent') {
        $two = 10;
    }
   
    if ($three == 'bad') {
        $three = 0;
    } elseif ($two == 'good') {
        $three = 3;
    } elseif ($three == 'very good') {
        $three = 5;
    } elseif ($three == 'excellent') {
        $three = 10;
    }
    

    if ($four == 'bad') {
        $four = 0;
    } elseif ($four == 'good') {
        $four = 3;
    } elseif ($four == 'very good') {
        $four = 5;
    } elseif ($four == 'excellent') {
        $four = 10;
    }
    
    if ($five == 'bad') {
        $five = 0;
    } elseif ($five == 'good') {
        $five = 3;
    } elseif ($five == 'very good') {
        $five = 5;
    } elseif ($five == 'excellent') {
        $five = 10;
    }
    

    // function sum($one, $two, $three, $four, $five)
    // {
    //     return $sum = $one + $two + $three + $four + $five;
    // }
    // print_r(sum($one, $two, $three, $four, $five));


}





?>
<!doctype html>
<html lang="en">

<head>
    <title>review</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form action="result.php" method="post">
            <div class="form-group">


                <div class="table-responsive mt-5">
                    <table class="table table-bordered  table-striped table-hover">
                        <thead>
                            <tr>

                                <th>Question ?</th>
                                <th>Reviews</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Are you satisfied with the level of cleanliness ?</td>
                                <td> <?php ?></td>

                            </tr>
                            <tr>
                                <td>Are you satisfied with the service prices ?</td>
                                <td> <?php ?></td>
                            </tr>
                            <tr>
                                <td>Are you satisfied with the nursing service ?</td>
                                <td> <?php ?></td>
                            </tr>
                            <tr>
                                <td>Are you satisfied with the level of the doctor?</td>
                                <td> <?php ?></td>
                            </tr>
                            <tr>
                                <td>Are you satisfied with the calmness in the hospital?</td>
                                <td> <?php ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
            <!-- <div class="form-group ">

                <?php

               
                ?>

            </div>

            <div class="form-group ">

                <?php

               
                if ($sum < 25) {
                    echo 'please contact the patient to find out the bad evaluation'. $num ;
                } else {
                    echo 'thank you';
                }

                ?>

            </div> -->
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>