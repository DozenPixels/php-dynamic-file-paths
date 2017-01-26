<?php
    
/*

Add the following lines of code to every page of your website.
This will include the config.php file based on your server configuration.
The config.php file creates 2 variables thats you can use for relative path links and php include()

*/

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    require_once($_SERVER["DOCUMENT_ROOT"] . "path/to/local/directory/inc/config.php");         //Path to the config.php file on your local server Ex. /local-project/inc/config.php
} else {
    require_once($_SERVER["DOCUMENT_ROOT"] . "path/to/web/server/directory/inc/config.php");    //Path to the config.php file on your web server Ex. /live-project/inc/config.php
}   
  
?>