<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Sign in</h2>

        <form action="3.php" method="get">
            <div class="form-group">

                <label for="user">Usser:</label>
                <input type="user" class="form-control" id="user" placeholder="Enter user" name="user">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
 <!-- **************************************************************** -->
 <hr>
 <br>
    <div class="container">
        <h2>SQL ATTACK(example)</h2>
        <p>We reserve the SQL entry and it shows all</p>
        <p>example ___ 'or '1'='1  </p>
        <img src="img/output.PNG" class="float-left" width="400" height="236">
        <img src="img/input_Injection.PNG" class="float-right" width="304" height="236">
    </div>



</body>

</html>