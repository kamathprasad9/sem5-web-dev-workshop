<?php
    include './dbCred.php';

    $id = $_POST["product-id"];
    $name = $_POST["product-name"];
    $price = $_POST["product-price"];
    $description = $_POST["product-description"];

    if(empty(trim($id)) || empty(trim($name)) || empty(trim($price)) || empty(trim($description ))){
        echo "<h3>All product fields are required</h3>";
    }else{
        $conn = mysqli_connect($servername, $username, $password);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (mysqli_select_db($conn, "assignment5")) {
            mysqli_close($conn);
        } else {
            $query = "CREATE DATABASE assignment5";
            mysqli_query($conn, $query);
            if (mysqli_query($conn, $query)) {
                echo "Database created succesfully<br />";
            } else {
                echo "Error creating database: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $query = "SELECT * FROM `product` WHERE `prod_id` = '$id'";
        $result=$conn->query($query);

        if($result->num_rows != 0){
            echo "<h3 class='m-2'>Product ID already exists</h3>";
        }else{
            $query = "create table product(
                prod_id VARCHAR(30) NOT NULL,
                prod_name VARCHAR(100) NOT NULL,
                prod_price VARCHAR(100) NOT NULL,
                prod_desc VARCHAR(200)
            )";
            $conn->query($query);
    
            $query = "INSERT INTO product (prod_id, prod_name, prod_price, prod_desc) 
            VALUES('$id', '$name', '$price', '$description')";
            $conn->query($query);

            echo "<h3 class='m-2'>Product has been added</h3>";
    
        }

        mysqli_close($conn);
    }
?>

<html>
     <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
            integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     </head>
    <body>
        <div class="form-group mx-3">
            <a href="./products.php"><button class="btn btn-warning" type="submit">Go to products page</button></a>
            <a href="./index.html"><button class="btn btn-warning" type="submit">Go to home page</button></a>
        </div>
    </body>
</html>
