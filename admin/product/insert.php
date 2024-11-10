<?php
if(isset($_POST['submit'])){
    include 'config.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = 'Uploadimage/'.$image_name;
    move_uploaded_file($image_loc,'Uploadimage/'.$image_name); 

    $product_category = $_POST['Pages'];


    // insert product

    mysqli_query($con,"INSERT INTO `tblproduct`( `Pname`, `Pprice`, `Pimage`, `Pcategory`) VALUES ('$product_name','$product_price','$img_des','$product_category')"); 
}
?>







  <!-- fetch data from database -->


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    
    <div class="container my-4">
        <div class="row">
            <div class="col-md-8 m-auto">
                 <a href="./index.php"class="bg-primary fs-4 fw-bold my-3 px-2 mx-4 text-light text-decoration-none border-4 rounded">Back</a>
                 <a href="../mystore.php"class="fs-4 fw-bold my-3 px-2 bg-info-subtle text-black text-decoration-none border-4 rounded">Admin Home</a>

            </div>
        </div>

    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto my-2">
                <table class="table table-hover border border-dark-subtle">
                    <thead class="bg-dark text-white fs-5 font-monospace text-center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </thead>

                    <tbody class="text-center">
                        <?php
    //                     include 'config.php';
    //                     $Record =  mysqli_query($con, "SELECT * FROM `tblproduct`");
    //                     while ($row = mysqli_fetch_array($Record))
    //                         echo "
    //     <tr>
    //     <td>$row[Id]</td>
    //     <td>$row[Pname]</td>
    //     <td>$row[Pprice]</td>
    //     <td><img src='$row[Pimage]' height='90px' weight='60px'></td>
    //     <td>$row[Pcategory]</td>
    //     <td><a href='delete.php? ID= $row[Id]' class='btn bg-danger'>delete</a></td>
    //     <td><a href='update.php? ID= $row[Id]' class='btn bg-primary'>Update</a></td>
    // </tr>
    //  ";
                        ?>

                    </tbody>

                </table>

            </div>
        </div>
    </div>

</body>

</html> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding: 20px;
            margin: 0;
        }

        
        .container {
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

      
        .btn {
            display: inline-block;
            padding: 10px 15px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            margin: 5px 10px;
        }

        .btn-back {
            background-color: #007bff;
            color: #fff;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }

        .btn-admin {
            background-color: #17a2b8;
            color: #fff;
        }

        .btn-admin:hover {
            background-color: #117a8b;
        }

        
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table thead th {
            background-color: #333;
            color: #fff;
            font-size: 1.1rem;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #ddd;
        }

       
        .btn-delete, .btn-update {
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 0.9rem;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-update {
            background-color: #28a745;
        }

        .btn-update:hover {
            background-color: #218838;
        }

       
        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }

            .btn {
                font-size: 1rem;
                padding: 8px 10px;
            }

            .table th, .table td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="button-container">
            <a href="./index.php" class="btn btn-back">Back</a>
            <a href="../mystore.php" class="btn btn-admin">Admin Home</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include 'config.php';
                $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
                while ($row = mysqli_fetch_array($Record))
                    echo "
                    <tr>
                        <td>$row[Id]</td>
                        <td>$row[Pname]</td>
                        <td>$row[Pprice]</td>
                        <td><img src='$row[Pimage]' height='80px' width='70px'></td>
                        <td>$row[Pcategory]</td>
                        <td><a href='delete.php?ID=$row[Id]' class='btn-delete'>Delete</a></td>
                        <td><a href='update.php?ID=$row[Id]' class='btn-update'>Update</a></td>
                    </tr>
                    ";
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>




