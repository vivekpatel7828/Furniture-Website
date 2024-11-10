<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-secondary">

    <div class="container ">
        <div class="row">
            <div class="col-md-6 shadow m-auto bg-white p-3 border font-monospace border-primary mt-3">
                <form action="login1.php" method="POST" >
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-primary">Login: </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name: </label>
                        <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password: </label>
                        <input type="password" name="userpassword" class="form-control" placeholder="Enter password" required>
                    </div>

                    <button class="bg-danger fs-4 fw-bold my-3 form-control text-light">Login</button>
                   
                </form>

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
    <title>Login Page</title>
    <style>
       
        body {
            background-color: #f0f0f5;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        
        .container {
            width: 90%;
            max-width: 400px;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-top: 5px solid #007bff;
        }

       
        .header {
            text-align: center;
            color: #007bff;
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

       
        label {
            color: #333;
            font-size: 1rem;
        }

        input[type="text"],
        input[type="password"] {
            width:95%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        
        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #218838;
        }

        
        @media (max-width: 400px) {
            .container {
                padding: 15px;
            }

            .header {
                font-size: 1.5rem;
            }

            .login-btn {
                font-size: 1.1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="login1.php" method="POST">
            <div class="header">Login</div>
            <label for="username">Name:</label>
            <input type="text" name="username" id="username" placeholder="Enter username" required>

            <label for="userpassword">Password:</label>
            <input type="password" name="userpassword" id="userpassword" placeholder="Enter password" required>

            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>

</html>
