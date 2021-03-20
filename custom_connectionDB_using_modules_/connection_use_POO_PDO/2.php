<?php

require "back_product.php";

$staff = new ReturnProducts();
$array_product=$staff->get_poducts($_GET['country']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mycustomizePOOCONEXION</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>

<h2>DATA TASKS conneion whit POO</h2>
    <!-- **************************************************************** -->

    <!-- **************************************************************** -->
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>id_productos</th>
                <th>product_name</th>
                <th>brand</th>
                <th>category</th>
                <th>color</th>
                <th>country_origin</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>

            <?php
            
                foreach ($array_product as $record){
                    echo "<tr>";
                    echo "<td>" . $record['id_productos'] . "</td>";
                    echo "<td>" . $record['product_name'] . "</td>";
                    echo "<td>" . $record['brand'] . "</td>";
                    echo "<td>" . $record['category'] . "</td>";
                    echo "<td>" . $record['color'] . "</td>";
                    echo "<td>" . $record['country_origin'] . "</td>";
                    echo "<td>" . $record['price'] . "</td>";
                    echo "</tr>";
                }


            ?>
        </tbody>
    </table>
    </div>

   
    
</body>
</html>
