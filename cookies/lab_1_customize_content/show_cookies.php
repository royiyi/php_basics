<?php

   
    if (!$_COOKIE['selected_language']) {
 
        header("Location:index.php");
 
    } else if ($_COOKIE['selected_language']=="sp"){
 
        header("Location:spanish.php");
        
    } else{
        
        header("Location:english.php");
        
    }
    

    
?>