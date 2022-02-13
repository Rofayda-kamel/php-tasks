<?php

if ($_POST) {

    $name = $_POST['name'];
    $city = $_POST['city'];
    $variety = [$_POST['variety']];
    $product = $_POST['product'];
    $quantity = $_POST['quant'];
    $price = $_POST['price'];

    if ($city == 'Cairo') {
       
        if ($total < 1000) {
            $discount = 0;
        } elseif ($total >= 1000 && $total < 3000) {
            $discount = 0.1;
        } elseif ($total >= 3000 && $total < 4500) {
            $discount = 0.15;
        } elseif ($total > 4500) {
            $discount = 0.2;
        }
        $delivery_fees = 0;
        $sub_total = $price * $quantity;
        $total .= $sub_total;
        $Discount = $total * $discount;
        $total_after_dic = $total - $Discount;
        $Net_total = $total_after_dic + $delivery_fees;

    } else if ($city == 'Giza') {

        if ($total < 1000) {
            $discount = 0;
        } elseif ($total >= 1000 && $total < 3000) {
            $discount = 0.1;
        } elseif ($total >= 3000 && $total < 4500) {
            $discount = 0.15;
        } elseif ($total > 4500) {
            $discount = 0.2;
        }
        $delivery_fees = 30;
        $sub_total = $price * $quantity;
        $total .= $sub_total;
        $Discount = $total * $discount;
        $total_after_dic = $total - $Discount;
        $Net_total = $total_after_dic + $delivery_fees;
    } else if ($city == 'Alex') {

         if ($total < 1000) {
            $discount = 0;
        } elseif ($total >= 1000 && $total < 3000) {
            $discount = 0.1;
        } elseif ($total >= 3000 && $total < 4500) {
            $discount = 0.15;
        } elseif ($total > 4500) {
            $discount = 0.2;
        }
        $delivery_fees = 50;
        $sub_total = $price * $quantity;
        $total .= $sub_total;
        $Discount = $total * $discount;
        $total_after_dic = $total - $Discount;
        $Net_total = $total_after_dic + $delivery_fees;
    } else if ($city == 'Other') {

            if ($total < 1000) {
            $discount = 0;
        } elseif ($total >= 1000 && $total < 3000) {
            $discount = 0.1;
        } elseif ($total >= 3000 && $total < 4500) {
            $discount = 0.15;
        } elseif ($total > 4500) {
            $discount = 0.2;
        }
        $delivery_fees = 100;
        $sub_total = $price * $quantity;   // 200 *2 = 400  , 100*3=300
        $total .= $sub_total;                //700 
        $Discount = $total * $discount;            // 700* 0 = 0  
        $total_after_dic = $total - $Discount;          // 700-0 = 700
        $Net_total = $total_after_dic + $delivery_fees;    // 700+100 =800
    }
}









?>



<!doctype html>
<html lang="en">

<head>
    <title>Supermarket</title>
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
                <h2 class="text-primary text-center h1 mb-5"> SUPERMARKET</h2>
            </div>

            <div class=" offset-2 col-8">
                <form method="post">
                    <div class="form-group  text-danger ">
                        <label for="name">User name</label>
                        <input type="text" name="name" id="name" value="<?php ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>


                    <div class="form-group text-danger">
                        <label for="city">City</label>
                        <select class="form-control" name="city" id="">
                            <option value="-1"></option>
                            <option value="one">Cairo</option>
                            <option value="two">Giza</option>
                            <option value="three">Alex</option>
                            <option value="four">Other</option>
                        </select>
                    </div>

                    <div class="form-group  text-danger ">
                        <label for="variety">Number of varieties</label>
                        <input type="number" name="variety" id="variety" value="<?php  ?>" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group text-center">
                        <button name="output" class="btn btn-outline-primary rounded"> Enter products</button>

                    </div>
                </form>

                <?php

                if ($variety > 0) {
                ?>

                    <div class="container">
                        <div class="row">
                            <div class=" col-4">
                                <form method="post">
                                    <div class="form-group  text-dark">
                                        <label for="product">Product name</label>
                                        <?php
                                        foreach ($variety as $value) { ?>
                                            <input type="text" name="product" id="product" value="<?php $value ?>" class="form-control" placeholder="" aria-describedby="helpId">


                                        <?php }

                                        ?>

                                    </div>
                                </form>
                            </div>
                            <div class=" col-4">
                                <form method="post">
                                    <div class="form-group  text-dark ">
                                        <label for="price">Price</label>
                                        <input type="number" name="price" id="price" value="<?php ?>" class="form-control" placeholder="" aria-describedby="helpId">

                                    </div>

                                </form>
                            </div>
                            <div class=" col-4">
                                <form method="post">
                                    <div class="form-group  text-dark ">
                                        <label for="quant">Quantities</label>
                                        <input type="number" name="quant" id="quant" value="<?php ?>" class="form-control" placeholder="" aria-describedby="helpId">

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                <?php
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