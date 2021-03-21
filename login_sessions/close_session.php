<?php

session_start();
session_destroy();
/*here we destroy a session
so that in another example browser we open in chrom and open it in moxila it will be able to open from where it left off, that's why we must close session */

header("location:login.php")



?>