<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

<?php
$id = $_GET['ID'];
include 'config.php';
$Record = mysqli_query($con,"SELECT * FROM `tblproduct` WHERE Id = '$id'");
$data = mysqli_fetch_array($Record);

?>


    <div class="container ">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-primary">Product Update</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name: </label>
                        <input type="text" value="<?php echo $data['Pname']?>" name="Pname" class="form-control" placeholder="Enter product name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price: </label>
                        <input type="text" value="<?php echo $data['Pprice']?>" name="Pprice" class="form-control" placeholder="Enter product price" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Immage: </label>
                        <input type="file" name="Pimage" class="form-control" required>
                        <img src="<?php echo $data['Pimage']?>" alt="" style="height: 100px;">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page Category: </label>
                        <select class="form-select" aria-label="Default select example" name="Pages">
                            <option selected>Home</option>
                            <!-- <option value="Home">Furniture</option> -->
                            <option value="Seating">Seating</option>
                            <option value="Sleeping">Sleeping or lying</option>
                            <option value="Tables">Tables</option>
                            <!-- <option value="Entertainment">Entertainment</option> -->
                        </select>
                    </div>
                    <input name="id" type="hidden" value="<?php echo $data['Id']?>">
                    <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-light">Update</button>
                    <a href="./insert.php" class="bg-primary fs-4 fw-bold my-3 form-control text-center text-light text-decoration-none border-4 rounded">Product List</a>
                </form>

            </div>
        </div>
    </div>


    <!-- php update code -->

    <?php
    if(isset($_POST['update'])){
        $id = $_POST['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = 'Uploadimage/'.$image_name;
    move_uploaded_file($image_loc,'Uploadimage/'.$image_name); 

    $product_category = $_POST['Pages'];

    include 'config.php';
    mysqli_query($con, "UPDATE `tblproduct` SET `Pname`='$product_name',`Pprice`='$product_price',`Pimage`='$img_des',`Pcategory`='$product_category' WHERE Id = '$id'");
    header("location:index.php"); 

    }
    ?>

</body>
</html>