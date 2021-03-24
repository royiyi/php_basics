<?php


    setcookie("selected_language",$_GET['language'],time()+4000);
    

    
     header("Location:show_cookies.php");
?>