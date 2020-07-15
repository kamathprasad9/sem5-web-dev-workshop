<?php 
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $flag;
    $i;
    $j;
    $arr = array();

    for ($i = $num1; $i <=$num2; $i++) {
        if ($i == 1 || $i == 0) {
            continue;
        } 
        $flag = 1;

        for ($j = 2; $j <= $i/2; $j++) {
            if ($i % $j == 0) {
                $flag = 0;
                break;
            }
        }

        if ($flag == 1) {
            array_push($arr, $i);
        }
    }

    for($i = 0; $i<count($arr); $i++) {
        echo $arr[$i]." ";
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
        <a href="./index.php"><button class="btn btn-warning" type="submit">Go to home page</button></a>
    </div>
    </body>
</html>