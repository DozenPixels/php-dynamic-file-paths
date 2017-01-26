<?php

/*

Define your BASE_URL and ROOT_PATH variables.



BASE_URL should be used with all Relative links and added resources EXCEPT php files. 

Ex. <img src="<?php echo BASE_URL; ?>assets/img/not-found.png" /> 
Ex. <link href="<?php echo BASE_URL; ?>assets/css/app.css" rel="stylesheet">
Ex. <script src="<?php echo BASE_URL; ?>assets/css/jquery.min.js"></script>

ROOT_PATH should be used with the php include() function.

Ex. <?php include(ROOT_PATH . "inc/header.php"); ?>

*/

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define("BASE_URL","/local/root/path/");                                     //Replace with your local root folder path
    define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/local/root/path/");        //Replace with your local root folder path
} else {
    define("BASE_URL","/web/server/root/path/");                                //Replace with your web server root folder path
    define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/web/server/root/path/");   //Replace with your web server root folder path
}