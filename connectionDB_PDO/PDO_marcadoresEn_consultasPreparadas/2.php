<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO consultations Prepared MARKERS</title>
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
                <th>country_origin</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $brand = $_GET['brand'];
            $country = $_GET['country'];
            try {
                //PDO


                $base = new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');

                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //investigate

                //$base=exec("SET CHARACTER SET utf8");

                $sql = "SELECT * FROM PROdUCTS WHERE BRAND = :MARCA AND COUNTRY_ORIGIN = :PAIS";
                // $resultados=mysqli_query($conexion,$consulta); before

                $results = $base->prepare($sql);


                $results->execute(array(":MARCA"=>$brand,":PAIS"=>$country));

                while ($record = $results->fetch(PDO::FETCH_ASSOC)) {
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

                $results->closeCursor();
            } catch (Exception $e) {

                die('Error :' . $e->GetMessage());
            } finally {
                $base = null;
            }

            ?>
        </tbody>
    </table>
    </div>

    <div class="card" style="width: 18rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
            <h5 class="card-title">PDO_marcadoresEn_consultasPreparadas</h5>
            <p class="card-text">$sql = "SELECT * FROM PROdUCTS WHERE BRAND = :MARCA AND COUNTRY_ORIGIN = :PAIS";.</p>
            <a href="#" class="btn btn-primary">Go ADD MARKERS</a>
        </div>

    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">2SECOND CHANGE</h5>
            <p class="card-text">$results->execute(array(":MARCA"=>$brand,":PAIS"=>$country));</p>
            <a href="#" class="card-link">OVERVIEW</a>
        </div>
    </div>
</body>



</html>