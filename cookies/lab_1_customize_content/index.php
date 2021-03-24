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

    <link rel="stylesheet" href="login.css">

</head>

<body>
    <?php
    /*
    If the cookie has already been created, it will redirect you directly to the page where you initially chose botherwise return to the beginning
    
    */

    if (isset($_COOKIE['selected_language'])) {
        if ($_COOKIE['selected_language'] == "sn") {
            header('location:spanish.php');
        } else if ($_COOKIE['selected_language'] == "en"){
            header('location:english.php');
        }
        
    } 
    
    

?>
    <hr>
    <br>
    <div class="container">
        <h2>CHOOICE ONE OPTION </h2>
        <p>SAVE THE COOKIES OF LANGUAGE CHOOICE</p>
        <a class="nav-link" href="create_cookies.php?language=sp">
            <img src="https://cdn.pixabay.com/photo/2014/06/29/15/25/spain-379535__340.jpg" class="float-left" alt="Paris" width="304"height="236">
        </a>
        <a class="nav-link" href="create_cookies.php?language=en"> 
            <img src="https://cdn.pixabay.com/photo/2016/02/19/11/15/american-1209605_960_720.jpg" class="float-right"
                alt="Paris" width="304" height="236">
        </a>
    </div>



    <hr>
    <br>
    <div class="container    d-flex justify-content-center">
        <div class="card  " style="width:300px;">
            <div class="card-header text-center   bg-success">redirect with cookies</div>

            <div class="card-body">
            If the cookie has already been created, it will redirect you directly to the page where you initially chose botherwise return to the beginning

            </div>
         
        </div>
    </div>
    



</body>

</html>