<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="container ">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-primary">Product Detail</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name: </label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter product name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price: </label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter product price" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Immage: </label>
                        <input type="file" name="Pimage" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page Category: </label>
                        <select class="form-select" aria-label="Default select example" name="Pages">
                            <option selected>Home</option>
                          
                            <option value="Seating">Seating</option>
                            <option value="Sleeping">Sleeping or lying</option>
                            <option value="Tables">Tables</option>
                            
                        </select>
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-light">Upload</button>
                    <a href="./insert.php" class="bg-primary fs-4 fw-bold my-3 form-control text-center text-light text-decoration-none border-4 rounded">Product List</a>
                </form>

            </div>
        </div>
    </div> -->






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

    <style>
        /* Body and container styling */
        body {
            background: linear-gradient(135deg, #e0e7ff, #f0f4ff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .custom-container {
            max-width: 450px;
            width: 100%;
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border: 2px solid #0077ff;
            animation: fadeIn 0.6s ease-in-out;
        }

        .custom-title {
            text-align: center;
            font-size: 1.8em;
            font-weight: 600;
            color: #0077ff;
            margin-bottom: 20px;
        }

        /* Form field styling */
        .custom-form-group {
            margin-bottom: 18px;
        }

        .custom-label {
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
            display: block;
        }

        .custom-input, .custom-select {
            width: 100%;
            padding: 12px;
            font-size: 1em;
            border-radius: 8px;
            border: 1px solid #ced4da;
            transition: all 0.3s ease;
            box-sizing: border-box;
            outline: none;
        }

        .custom-input:focus, .custom-select:focus {
            border-color: #0077ff;
            box-shadow: 0 0 6px rgba(0, 119, 255, 0.3);
        }

        /* Button styling */
        .custom-button {
            width: 100%;
            padding: 14px;
            font-size: 1em;
            font-weight: bold;
            color: #fff;
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 12px;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 119, 255, 0.2);
            border: none;
            text-decoration: none;
            display: block;
        }

        .custom-btn-upload {
            background: linear-gradient(90deg, #28a745, #34d058);
        }

        .custom-btn-upload:hover {
            background: linear-gradient(90deg, #218838, #28a745);
            box-shadow: 0 6px 16px rgba(52, 208, 88, 0.5);
        }

        .custom-btn-list {
            background: linear-gradient(90deg, #0077ff, #0056b3);
            padding: 12px 0px;
        }

        .custom-btn-list:hover {
            background: linear-gradient(90deg, #0056b3, #003f91);
            box-shadow: 0 6px 16px rgba(0, 119, 255, 0.5);
        }

        /* Responsive styling */
        @media (max-width: 500px) {
            .custom-container {
                padding: 20px;
            }

            .custom-title {
                font-size: 1.6em;
            }

            .custom-input, .custom-select, .custom-button {
                font-size: 0.95em;
                padding: 10px;
            }
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="custom-container">
        <p class="custom-title">Product Detail</p>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="custom-form-group">
                <label class="custom-label">Product Name:</label>
                <input type="text" name="Pname" class="custom-input" placeholder="Enter product name" required>
            </div>

            <div class="custom-form-group">
                <label class="custom-label">Product Price:</label>
                <input type="text" name="Pprice" class="custom-input" placeholder="Enter product price" required>
            </div>

            <div class="custom-form-group">
                <label class="custom-label">Product Image:</label>
                <input type="file" name="Pimage" class="custom-input" required>
            </div>

            <div class="custom-form-group">
                <label class="custom-label">Select Page Category:</label>
                <select class="custom-select" name="Pages">
                    <option selected>Home</option>
                    <option value="Seating">Seating</option>
                    <option value="Sleeping">Sleeping or lying</option>
                    <option value="Tables">Tables</option>
                </select>
            </div>

            <button type="submit" name="submit" class="custom-button custom-btn-upload">Upload</button>
            <a href="./insert.php" class="custom-button custom-btn-list">Product List</a>
        </form>
    </div>

</body>

</html>

