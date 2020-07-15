<?php
    include './dbCred.php';


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $result  = $conn->query("SELECT * FROM product");

    echo "<table  class='m-2'>";
    echo "<tr><th>Product ID</th><th>Product Name</th><th>Product Price</th><th>Product Description</th></tr>";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";

            $id = $row["prod_id"];
            $name = $row["prod_name"];
            $price = $row["prod_price"];
            $description = $row["prod_desc"];
            
            $description = strlen($description) > 20 ? substr($description, 0, 20)."..." : $description;

            echo "<td>".$id."</td><td>".$name."</td><td>".$price."</td><td>".$description."</td>";
            echo "</tr>";
        }
    }
    echo "</table>";

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="./css/style.css">

        <title>Document</title>
    </head>
    <body>
        <h1  class='m-2'>Enter Product ID to be deleted</h1>
        <form method="GET" action="./dltProduct.php">
            <input type="text" name="id" class='m-2'>
            <input type="submit">
        </form> 
    </body>
</html>