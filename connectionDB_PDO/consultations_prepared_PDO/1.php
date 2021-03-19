<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO consultations Prepared</title>
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
                <th>id_users</th>
                <th>username</th>
                <th>password</th>
                <th>telephone</th>
                <th>address</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $id = $_GET['user'];
            try {
                //PDO


                $base = new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');

                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //investigate

                //$base=exec("SET CHARACTER SET utf8");

                $sql = "SELECT * FROM USERS WHERE ID_USERS = ?";
                // $resultados=mysqli_query($conexion,$consulta); before

                $results = $base->prepare($sql);


                $results->execute(array($id));

                while ($record = $results->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $record['id_users'] . "</td>";
                    echo "<td>" . $record['username'] . "</td>";
                    echo "<td>" . $record['password'] . "</td>";
                    echo "<td>" . $record['telephone'] . "</td>";
                    echo "<td>" . $record['address'] . "</td>";
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
</body>

</html>