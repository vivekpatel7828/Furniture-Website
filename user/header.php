<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User home-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    session_start();
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
    }

    .img-fluid {
        height: 50px;
        width: 110px;
    }

    .navbar {
        background-color: #664747;
        /* Wooden color */
        padding: 1rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar .navbar-brand img {
        width: 94px;
        height: auto;
        border: solid #9c9c9c 1px;
        border-radius: 0px 24px 0px 24px;
    }

    .navbar .navbar-nav {
        /* display: flex;
            align-items: center; */
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        flex-direction: row;
    }

    .navbar .navbar-nav a {
        color: #fff;
        font-weight: bold;
        margin-right: 20px;
        text-decoration: none;
        font-size: 1.1rem;
        transition: color 0.3s, transform 0.3s;
    }

    .navbar .navbar-nav a:hover {
        color: #e67e22;
        transform: scale(1.05);
    }

    .navbar .navbar-nav span {
        font-size: 1.1rem;
        color: #ecf0f1;
        font-weight: normal;
    }

    .navbar .navbar-nav .text-primary {
        color: #000000ab !important;
        font-weight: 700;
        font-size: medium;
    }

    .sticky-top {
        background-color: #462929;
        /* Red */
        padding: 0.5rem 0;
        display: flex;
        justify-content: center;
    }

    .sticky-top ul {
        display: flex;
        justify-content: center;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sticky-top li {
        margin: 0 20px;
    }

    .sticky-top a {
        color: #fff;
        font-weight: bold;
        font-size: 1.2rem;
        text-decoration: none;
        transition: color 0.3s, transform 0.3s;
    }

    .sticky-top a:hover {
        color: #f39c12;
        transform: scale(1.1);
    }

    @media (max-width: 768px) {
        .navbar .navbar-nav {
            flex-direction: column;
            align-items: flex-start;
        }

        .navbar .navbar-nav a {
            margin: 0.5rem 0;
        }

        .sticky-top ul {
            flex-direction: column;
        }

        .sticky-top li {
            margin: 10px 0;
        }
    }
</style>


<body>
    <?php
    // session_start();
    // $count = 0;
    // if (isset($_SESSION['cart'])) {
    //     $count = count($_SESSION['cart']);
    // }
    ?>
    <nav class="navbar">
        <div class="navbar-brand">
            <img src="logodesign.jpg" alt="Brand Logo">
        </div>
        <div class="navbar-nav">
            <a href="index.php" class="text-primary">Home</a>
            <a href="viewCart.php" class="text-primary">Cart(<?php echo $count ?>) |</a>
            <span>
                Hello,
                <?php
                if (isset($_SESSION['user'])) {
                    echo $_SESSION['user'] . " |";
                    echo "
                <a href='form/logout.php' class='text-primary'>Logout |</a>
                ";
                } else {
                    echo "|";
                    echo "
                    <a href='form/login.php' class='text-primary'>Login |</a>
                    ";
                }
                ?>
                <a href="../admin/mystore.php" class="text-primary">Admin</a>
            </span>
        </div>
    </nav>

    <div class="sticky-top">
        <ul>
            <li><a href="Furn1.php">Seating</a></li>
            <li><a href="Furn2.php">Tables</a></li>
            <li><a href="Furn3.php">Sleeping</a></li>
        </ul>
    </div>
</body>

</html>