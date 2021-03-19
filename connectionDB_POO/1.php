<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Data Base</title>
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
    $connection= new mysqli("localhost","root","","pruebas");
    if($connection->connect_errno){
        echo "CONNECTION FAILED".$connection->connect_errno;
    }
    // mysqli_set_charset($conexion,"utf8"); before
    $connection ->set_charset("utf8");
    $sql = "SELECT * FROM USERS";
    // $resultados=mysqli_query($conexion,$consulta); before

    $results=$connection->query($sql);

    if ($connection->connect_errno) {
        die ($connection->error);
    }

    // while (($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC))) { before

    while ($row=$results->fetch_assoc()) {
        echo"<tr>";
        echo"<td>".$row['id_users']."</td>";
        echo"<td>".$row['username']."</td>";
        echo"<td>".$row['password']."</td>";
        echo"<td>".$row['telephone']."</td>";
        echo"<td>".$row['address']."</td>";
        echo"</tr>";
    }

    // mysqli_close($conexion);  before
    $connection->close();
?>
    </tbody>
    </table>
   
</body>

</html>