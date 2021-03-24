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
<?php
    setcookie("proof","30 seconds duration of these cookies",time()+200,"/mypractice/cookies/time_scope/S_1_2/");


?>
    <hr>
    <br>
    <div class="container    d-flex justify-content-center">
        <div class="card  " style="width:300px;">
            <div class="card-header text-center   bg-success">SCOPE</div>
            <div class="card-body">
            as a new parameter we put the directory where the cookie can be accessed
            </div>
            <div class="card-footer">code new parameter: /mypractice/cookies/time_scope/S_1_2/ (PATH SCOPE) </div>
        </div>
    </div>
    






</body>

</html>