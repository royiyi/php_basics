<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 cookie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 

</head>

<body>

    <div class="container    d-flex justify-content-center">
        <div class="card  " style="width:300px;">
            <div class="card-header text-center   bg-success">rescuing the cookies</div>
            <div class="card-body">*In this case, if we do not define the time of the cookie, by default it is
                eliminated
                when we close the window in the browser</div>
            <div class="card-footer">code: $_COOKIE["variableNAME"] </div>
        </div>
    </div>

    <br>
    <hr>
    <?php

    if (isset($_COOKIE["proof"])) {

        echo $_COOKIE["proof"];
    } else {

        echo "the cookie is not created";
    
    }
    
   

?>

</body>

</html>