<?php
    ob_start();
    // include header.php file

    session_start();

    if(isset($_SESSION['user'])){
        require_once("header-singed.php");
    }else{  
        require_once("header.php");
    }
?>

<?php

    /*  include products */
    include ('Template/_products.php');
    /*  include products */

    /*  include top sale section */
    include ('Template/_top-sale.php');
    /*  include top sale section */

?>

<?php
// include footer.php file
include ('footer.php');
?>

