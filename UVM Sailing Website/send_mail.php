
<html>
    <head>
        <script type="text/javascript">
            //<!--
            function delayer() {
                window.location = "index.php"
            }
            //-->
        </script>
    </head>
    <body onLoad="setTimeout('delayer()', 5000)">
        <h2>Thank you for your submission!</h2>
        <p>You will now be redirected to our home page.</p>

    </body>
</html>
<?php
# Create an empty message variable.
$message = "";
# The mail that we want to use to recevie the submitted information.
$to = "catamountsailing@gmail.com";
# The E-Mail subject
$subject = "UVM Sailing recruitment Form";

$message.="Email from recruitment form\n";

# iterate the $_POST array
foreach ($_GET as $key => $value) {
    $message.=$key . ": " . $value . "\n";
}
# Send message by e-mail.
$sm = mail($to, $subject, $message);
?>