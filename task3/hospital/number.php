<?php

$num= $_POST['num']



?>
<!doctype html>
<html lang="en">

<head>
    <title>number</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row ">
            <div class=" col-12  ">
                <h2 class="text-dark text-center h1 mb-5 mt-5"> Hospital</h2>
            </div>
            <div class=" offset-4 col-4 mb-5">
                <form action="review.php" method="post">
                    <div class="form-group text-primary  ">
                       
                        <input type="text" name="phone" id="phone"   class="form-control mb-2" placeholder="Phone Number" disabled aria-describedby="helpId">
                        <input type="number" name="num" id="num" value="<?php $num?>" class="form-control" placeholder="" aria-describedby="helpId">
                   
                    </div>
                    
                    <div class="form-group text-center">
                        <button name="output" class="btn btn-outline-primary rounded"> Submit</button>

                    </div>
                </form>
                

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