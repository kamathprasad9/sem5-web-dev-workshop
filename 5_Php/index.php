<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-3">
            <h1>Prime numbers between two numbers</h1>
            <form id="range-form" action="./prime.php" method="GET">
                <div class="form-row m-2">
                    <div class="col-md-3">
                        <label for="num1">Enter N1:</label>
                        <input type="number" id="num1" name="num1" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="num2">Enter N2:</label>
                        <input type="number" id="num2" name="num2" class="form-control" required>
                    </div>
                </div>
                <div class="form-group mx-3">
                    <button class="btn btn-warning" type="submit">Prime Nos in the range N1 and N2</button>
                </div>
            </form>
        </div>
        <hr>
        <h1>PHP and MYSQL</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="./addProduct.php" method="POST">
                        <table>
                            <tr>
                                <th>Enter Product Id:</th>
                                <td><input type="text"  id="product-id" name="product-id" ></td>
                            </tr>
                                
                            <tr>
                                <th>Enter Product Name:</th>
                                <td><input type="text" id="product-name" name="product-name"></td>
                            </tr>
                            
                            <tr>
                                <th>Enter Product Price:</th>
                                <td><input type="text" id="product-price" name="product-price"></td>
                            </tr>
                            
                            <tr>
                                <th>Enter Product Description:</th>
                                <td><input type="text" id="product-description" name="product-description"></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td><input type="submit" value="ADD"></td>
                            </tr>
                        </table>
                </form>
                <div class="form-group mx-3">
                    <a href="./products.php"><button class="btn btn-warning" type="submit">Go to products page</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="./js/work.js"></script>
</body>

</html>