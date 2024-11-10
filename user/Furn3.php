<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sleeping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #ff6f61;
            font-family: 'Courier New', monospace;
            font-weight: bold;
            margin-top: 3rem;
        }

        /* .container-fluid {
            padding: 2rem;
        } */

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .col-md-6, .col-lg-4 {
            width: 100%;
            max-width: 300px;
            margin-bottom: 2rem;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            margin: 0.5rem;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: contain;
        }

        .card-body {
            padding: 1rem;
            text-align: center;
        }

        .card-title {
            font-weight: bold;
            color: #333;
            font-size: 1.2rem;
        }

        .card-text {
            font-size: 1rem;
            font-weight: bold;
            color: #d9534f;
        }

        input[type="number"] {
            width: 100px;
            padding: 0.5rem;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input[type="number"]:focus {
            border-color: #ff6f61;
            outline: none;
        }

        input[type="submit"] {
            background-color: #434343;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color:#6c4646;
        }

        @media (max-width: 768px) {
            .col-md-6, .col-lg-4 {
                width: 100%;
                margin: 0 10px;
            }

            h1 {
                font-size: 1.8rem;
            }
        }

    </style>
<body>
<?php
    include 'header.php';
    ?>
    <div class="container-fluid row">

        <h1 class="text-center">Sleeping</h1>
        <?php
        include 'config.php';
        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
        while($row = mysqli_fetch_array($Record)){
             $check_page = $row['Pcategory'];
             if($check_page === 'Sleeping'){

                 
                echo "
                <div class='col-md-6 col-lg-4'>
                    <form action='InsertCart.php' method='POST'>
                        <div class='card'>
                            <img src='../admin/product/$row[Pimage]' class='card-img-top' alt='Product Image'>
                            <div class='card-body'>
                                <h5 class='card-title'>$row[Pname]</h5>
                                <p class='card-text'>RS: $row[Pprice]</p>
                                <input type='hidden' name='Pname' value='$row[Pname]'>
                                <input type='hidden' name='Pprice' value='$row[Pprice]'>
                                <input type='number' name='Pquantity' min='1' max='20' placeholder='Quantity'><br><br>
                                <input type='submit' name='addCart' value='Add to cart'>
                            </div>
                        </div>
                    </form>
                </div>";
        }
        }
        ?>
</div>
</body>
</html>