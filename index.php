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

    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('Template/_special-price.php');
    /*  include special price section  */

    /*  include banner ads  */
        include ('Template/_banner-ads.php');
    /*  include banner ads  */

    /*  include НОВИНКИ section  */
        include ('Template/_new-books.php');
    /*  include new phones section  */

    /*  include blog area  */
         include ('Template/_blogs.php');
    /*  include blog area  */

?>


<?php
// include footer.php file
include ('footer.php');
?>