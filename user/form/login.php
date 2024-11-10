<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
           
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 5% auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .heading {
            text-align: center;
            color: black;
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-size: 1rem;
            color: #555;
            display: block;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 95%;
            padding: 0.8rem;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            border-color: #3498db;
            outline: none;
        }

        .login-btn, .register-btn {
            width: 100%;
            padding: 0.8rem;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .login-btn {
            background-color: #5050508c;
            color: #333;
        }

        .login-btn:hover {
            background-color: #d4ac0d;
        }

        .register-btn {
            background-color: #e74c3c;
        }

        .register-link {
            color: #fff;
            text-decoration: none;
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1.5rem;
            }

            .heading {
                font-size: 1.6rem;
            }

            .form-label, .form-input, .login-btn, .register-btn {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="heading">User Login</p>
        <form action="login1.php" method="POST">
            <div class="form-group">
                <label class="form-label">UserName:</label>
                <input type="text" name="name" placeholder="Enter user name" class="form-input" required>
            </div>
            <div class="form-group">
                <label class="form-label">UserPassword:</label>
                <input type="password" name="password" placeholder="Enter password" class="form-input" required>
            </div>
            <div class="form-group">
                <button type="submit" class="login-btn">Login</button>
            </div>
            <div class="form-group">
                <button class="register-btn"><a class="register-link" href="register.php">Register</a></button>
            </div>
        </form>
    </div>
</body>
</html>
