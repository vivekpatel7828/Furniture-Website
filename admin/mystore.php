
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <style>
       
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f9;
        }

        
        .navbar {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 2rem;
        }

        .navbar a {
            color: #ecf0f1;
            margin-left: 1rem;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #bdc3c7;
        }

       
        .dashboard-heading {
            text-align: center;
            margin-top: 2rem;
            font-size: 1.8rem;
            color: #34495e;
        }

       
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            padding: 1.5rem;
            background-color: #e74c3c;
            border-radius: 8px;
            max-width: 500px;
            margin: 2rem auto;
        }

        .button-container a {
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            margin: 0 1.5rem;
            text-decoration: none;
        }

        .button-container a:hover {
            color: #34495e;
        }

       
        @media (max-width: 768px) {
            .navbar h1 {
                font-size: 1.5rem;
            }

            .button-container {
                flex-direction: column;
                padding: 1rem;
            }

            .button-container a {
                margin: 0.5rem 0;
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<?php
 session_start();

 if(!$_SESSION['admin']){
    header('location:form/login.php');
 }
?>

<body>
   
    <nav class="navbar">
        <div>
            <h1>Furniture</h1>
        </div>
        <div>
            <span>
                Hello, <?php echo $_SESSION['admin']; ?> |
                <a href="form/logout.php">Logout</a> |
                <a href="../user/index.php">User Panel</a>
            </span>
        </div>
    </nav>

    <div>
        <h2 class="dashboard-heading">Dashboard</h2>
    </div>

    <div class="button-container">
        <a href="product/index.php">Add Post</a>
        <a href="user.php">Users</a>
    </div>
</body>

</html>
