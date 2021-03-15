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

        <form action="2.php" method="get">
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
    <h2>AVOID WHIT FUNCTIONS</h2>
    <div class="card-columns">
            <div class="card   bg-primary text-white">
                <div class="card-header">mysqli_real_escape_string(CONECCTION,variable)</div>
                <div class="card-body bg-light  text-dark">function escapes special characters in a string for use in an
                    SQL query
                    avoid all types of characters included if they put numeric as ASCII</div>
                <div class="card-footer">IT IS EFFECTIVE</div>
            </div>



            <div class="card  bg-success text-white">
                <div class="card-header">addslashes(VARIABLE)</div>
                <div class="card-body   bg-light  text-dark">Add a backslash in front of each double quote since it does
                    not block all characters and allows you to put ASCII numbers</div>
                <div class="card-footer">IT IS NOT EFFECTIVE</div>
            </div>


            <div class="card  bg-warning text-white">
                <div class="card-header">mysql_affected_rows ( vaeriable conection ) </div>
                <div class="card-body   bg-light  text-dark">Get number of affected rows in previous MySQL operation</div>
                <div class="card-footer">GOOD</div>
            </div>
    </div>

</body>

</html>