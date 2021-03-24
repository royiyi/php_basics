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
            <div class="card-header text-center   bg-success">it is  in the scope of the created route</div>
            <div class="card-body">PATH  yes we can acceses at the cookie
                
            </div>
            <div class="card-footer">code new parameter: D:\Programas\htdocs\mypractice\cookies\time_scope\S_1_2\S_3.php</div>

        </div>
    </div>

    <br>
    <hr>
    <?php

    if (isset($_COOKIE["proof"])) {

        echo "the cookies is : ".$_COOKIE["proof"];
    } else {

        echo "the cookie is not created";
    
    }
    
   

?>

</body>

</html>