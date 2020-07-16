<?php
    include './dbCred.php';

    $id = $_GET['id'];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM `product` WHERE `prod_id` = '$id'";
    $result=$conn->query($query);
    if($result->num_rows == 0){
        echo "<h3  class='m-2'>Product ID does not exists</h3>";
    }elseif(empty(trim($id))){
        echo "<h3  class='m-2'>Product ID field left empty!s</h3>";
    }else{
        $conn->query("DELETE FROM product WHERE prod_id = '$id'");
        mysqli_close($conn);       
        header('Location: http://localhost/Assignment-5/products.php');
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
    </div>
    <br>
    <div class="form-group mx-3">
        <a href="./index.html"><button class="btn btn-warning" type="submit">Go to home page</button></a>
    </div>
    </body>
</html>