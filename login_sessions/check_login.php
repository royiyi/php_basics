
    <?php
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

    

    session_start();    // new      +++
    // If we verify that the user is registered, we start the session
    $_SESSION["usuario"]=$_POST["username"];//new       +++
    //$_SESSION["nameVariable"] GLOBAL VARIABLE use in anywhere on this site


    header ("location:page_1u.php");

} else {
    header ("location:login.php");
}


} catch (Exception $e) {
    die("MISTAKE ".$e->getMessage());
}

