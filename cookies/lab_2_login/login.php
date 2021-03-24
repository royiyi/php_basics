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

    <link rel="stylesheet" href="login.css">

</head>

<body>

    <?php
    $authenticated=false;//---new




if (isset($_POST["submit"])) {//pass 2

try {


    $base = new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //investigate
    
    //$base=exec("SET CHARACTER SET utf8");
    
    $sql = "SELECT * FROM USERS WHERE USERNAME = :login AND PASSWORD = :pswd";
    // $resultados=mysqli_query($conexion,$consulta); before
    
    $results = $base->prepare($sql);
    
    $login= htmlentities(addslashes($_POST['username']));
    
    $password= htmlentities(addslashes($_POST['password']));
    /*---------htmlentities();-----
    == Convert all applicable characters to HTML entities
    EXAMPLE - $tr = "A 'quote' is <b>bold</b>";
    echo htmlentities($tr);
    // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
    -------------- addslashes() ----------------
    $str = addslashes('What does "yolo" mean?');
    echo $str."\n";
    //output : What does \"yolo\" mean?
    */
    $results->bindValue(":login",$login);
    $results->bindValue(":pswd",$password);
    //bindValue — Binds a value to a parameter
    
    //bind value == enlazar valor
    $results->execute();
    
    $registry_number = $results->rowCount();

    
    if ($registry_number !=0) { 
    
        $authenticated = true;
        if (isset($_POST["autoLog"])) {
            setcookie("name_user",$_POST["username"],time()+4000);
        }

    
    } else {
        echo "error your username is wrong" ;

    }
    
    
    } catch (Exception $e) {
        die("MISTAKE ".$e->getMessage());
    }


}


//----------------------------------------------------------------
    if ($authenticated== false) {
        if (!isset($_COOKIE["name_user"])) {//if the cookie not created
            include ("form.html");
        }
    }
    
    ?>

    <div class="container">
        <h2>Aligning images</h2>
        <p>Use the float classes to float the image to the left or to the right:</p>
        <img src="https://cdn.pixabay.com/photo/2020/07/31/07/59/flowers-5452263__340.jpg" class="float-left"
            alt="Paris" width="304" height="236">
        <img src="https://cdn.pixabay.com/photo/2020/12/27/12/07/sunrise-5863751__340.png" class="float-right"
            alt="Paris" width="304" height="236">
    </div>

</body>

</html>