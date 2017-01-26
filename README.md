####PHP Dynamic File Paths (for templating)

A quick and dirty solution for relative path issues when templating with PHP. The `index.php` file contains the code that you should include at the top of every page that you would like to use.

Ex.

```html
<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    require_once($_SERVER["DOCUMENT_ROOT"] . "path/to/local/directory/inc/config.php");
} else {
    require_once($_SERVER["DOCUMENT_ROOT"] . "path/to/web/server/directory/inc/config.php");
}   
  
include(ROOT_PATH . "inc/header.php");
  
?>

<h1>Hello World!</h1>

<?php include(ROOT_PATH . "inc/footer.php"); ?>
```

If you are having problems figuring out the folder paths you can use the predefined php constants [here](http://www.php.net/manual/en/language.constants.predefined.php). 

If you are using MAMP as your local server, the ==htdocs== folder is usually your root, so you would use `/my-project/` if your project is saved in a folder named ==my-project==.

In a typical web server environment, your root folder is most likely ==www== or ==public_html==. So if your files are located directly inside that folder and not in a subfolder, you would use `/` for your web server path inside the `require_once()` and the `define()` functions.