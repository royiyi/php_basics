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
    <?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
        header('Location: login.php');
    }
    ?>

    <?php
    echo "HI !!".$_SESSION["usuario"];
?>
    <h4>OTHER PAGE 1U</h4>
    <div class="card-columns">

        <div class="card">
            <div class="card-header text-center bg-primary text-light">session_start()</div>
            <div class="card-body">The sessions serve us so that a user who, if registered, can access a page again
                without having to log in again as long as he is registered, otherwise, he automatically sends it to the
                LOGIN even if it is in a part of the URL</div>


        </div>
        <div class="card">
            <div class="card-header text-center bg-danger text-light">session_destroy()</div>
            <div class="card-body">here we destroy a session
                so that in another example browser we open in chrom and open it in moxila it will be able to open from
                where it left off, that's why we must close session
                <p>
                </p>
            </div>

            <a href="close_session.php" class="btn btn-primary">Sign off</a>

        </div>

    </div>



</body>

</html>