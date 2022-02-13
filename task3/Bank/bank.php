<?php

if ($_POST) {

    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $year = $_POST['year'];

    if ($year < 3) {
        $Amount = $amount * 0.1;                             //2000*0.1 = 200
        $interest_rate = $Amount * $year;                     // 200 *1 = 200
        $Loan_After_interest =  $amount + $interest_rate;    //2000+200 = 2200
        $monthly = round(($Loan_After_interest / 24), 4);      // 2200/24 =91.6667
    } else {
        $Amount = $amount * 0.15;                           //3000*0.15 =450
        $interest_rate = $Amount * $year;                  // 450 *6 = 2700
        $Loan_After_interest =  $amount + $interest_rate;   // 3000+ 2700 = 5700
        $monthly = round(($Loan_After_interest / 24), 4);    //5700/24  = 237.5
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class=" col-12  mt-5 ">
                <h2 class="text-dark text-center h1 mb-5"> BANK</h2>
            </div>
            <div class="  col-4">
                <img src="images/bank.jpg" class="w-100 mt-4 img-responsive">
            </div>
            <div class="  col-8">
                <form method="post">
                    <div class="form-group text-primary offset-3 w-50 ">
                        <label for="name">User name</label>
                        <input type="text" name="name" id="name" value="<?php if (isset($name)) { echo $name;} ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group text-primary offset-3  w-50  ">
                        <label for="loan">Loan amount</label>
                        <input type="number" name="amount" id="amount" value="<?php if (isset($amount)) {echo $amount;} ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group text-primary offset-3 w-50  ">
                        <label for="loan-year">Loan year</label>
                        <input type="number" name="year" id="year" value="<?php if (isset($year)) {echo $year;} ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group text-center">
                        <button name="output" class="btn btn-outline-primary rounded"> calculate</button>

                    </div>
                </form>
                

                <?php

                if (isset($name, $interest_rate, $Loan_After_interest, $monthly)) { ?>

                    <div class="container">
                        <div class="row">
                            <div class="  col-12  ">
                                <div class="table-responsive ">
                                    <table class="table table-bordered-primary  table-striped table-hover">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>User name</th>
                                                <th>Interest rate</th>
                                                <th>Loan after interest</th>
                                                <th>Monthly</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $name ?> </td>
                                                <td><?php echo $interest_rate ?> </td>
                                                <td><?php echo $Loan_After_interest ?></td>
                                                <td><?php echo $monthly ?></td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }

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