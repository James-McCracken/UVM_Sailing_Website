<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            The Official Site of Vermont Catamounts Sailing
        </title>

        <link href=Style.css rel="stylesheet">



        <?php
        $domain = "http://";
        if (isset($_SERVER['HTTPS'])) {
            if ($_SERVER['HTTPS']) {
                $domain = "https://";
            }
        }

        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
        $domain .= $server;
        // parse the url into htmlentites to remove any suspicous vales that someone
        // may try to pass in. htmlentites helps avoid security issues.

        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        //htmlentities = displays the html code. just a BIG security tool
        // break the url up into an array, then pull out just the filename
        $path_parts = pathinfo($phpSelf);
        if ($debug) {
            print "<p>Domain" . $domain;
            print "<p>php Self" . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre>";
        }
        require_once('security.php');
        if ($path_parts['filename'] == "EmailForm") {
            include ("validation_functions.php");
            include ("mail-message.php");
        }
        ?>	

    </head>

    <?php
// giving each body tag an id really helps with css later on
    print '<body  class = '. '"fullPageContainer"' .' id="'. $path_parts['filename'] . '">';


    ?>

