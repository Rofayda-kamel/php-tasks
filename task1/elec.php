<?php
# Solution
// kilo : 40%
// unit >= 50
// cost : 50 * 40%  = 20 EGP
// Vat : 20% 
// cost with vat = 20* 0.2 = 4 EGP
// cost After Vat : 24 EGP
// 


if ($_POST) {
    $unit = $_POST['unit'];

    if ($unit <= 50) {
        $cost = $unit * 0.5;
        $cost_with_vat = $cost * 0.2;
        $cost_After_Vat = ($cost_with_vat + $cost ). ' EGP';

    } elseif ($unit >= 51 && $unit < 151) {
        $cost = $unit * 0.75;
        $cost_with_vat = $cost * 0.2;
        $cost_After_Vat = ($cost_with_vat + $cost ). ' EGP';

    } elseif ($unit >= 151 && $unit <= 250) {
        $cost = $unit * 1.20;
        $cost_with_vat = $cost * 0.2;
        $cost_After_Vat = ($cost_with_vat + $cost ). ' EGP';
        
    } else {
        $cost = $unit * 1.5;
        $cost_with_vat = $cost * 0.2;
        $cost_After_Vat = ($cost_with_vat + $cost ). ' EGP';
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Electricity bill</title>
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
                <h2 class="text-dark text-center h2 "> Find electricity bill </h2>
                <br>
            </div>

            <div class="offset-4 col-4">
                <form method="post">
                    <div class="form-group">

                        <input type="number" name="unit" id="unit" class="form-control" placeholder="Enter unit" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <button name="output" class="btn btn-dark rounded"> Cost after vat</button>
                        


                    </div>
                </form>
                
                        
                        
                        
                <?php

                if (isset($cost_After_Vat)) {
                    echo "<div class='alert alert-primary'> fullcost is : $cost_After_Vat </div>";
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