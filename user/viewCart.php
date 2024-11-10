<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 class="text-primary">My Cart</h1>
            </div>
        </div>
    </div>

    <div class="contanier-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-border text-center ">
                    <thead class="bg-primary-subtle fs-5">
                        <th>Serial no.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </thead>


                    <tbody>
                        <?php
        
                        $i = 0;
                        $ptotal = 0;
                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $ptotal = $value['productPrice'] * $value['productQuantity'];
                                $total += $value['productPrice'] * $value['productQuantity'];
                                $i = $key+1;
                                echo "
                                    <form action='InsertCart.php' method='POST'>                   
                                    
                                    <tr>
                                    <td> $i</td>
                                    <td><input type='hidden' name='Pname' value=' $value[productName]'> $value[productName]</td>
                                    <td><input type='hidden' name='Pprice' value=' $value[productPrice]'> $value[productPrice]</td>
                                    <td><input type='' name='Pquantity' value=' $value[productQuantity]'></td>
                                    <td>$ptotal</td>
                                    <td> <button name='update' class='btn btn-primary'>Update</button></td>
                                    <td> <button name='remove' class='btn btn-danger'>Delete</button></td>

                                    <td><input type='hidden' name='item' value='$value[productName]'></td>
                                    </tr>
                                    </form>
                                    ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
              <div class="col-lg-3 text-center">
                <h3>Total</h3>
                <h1 class="bg-danger-subtle"><?php
                    echo number_format($total,2);
                ?></h1>
              </div>  
        </div>
    </div>
</body>

</html>