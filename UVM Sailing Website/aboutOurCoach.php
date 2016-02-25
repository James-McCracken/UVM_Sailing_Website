<?php
include("top.php");
include("nav.php");
?>

<div class = "bodyColor container alignAsColumn">

    <div>
    <figure>
        <img src="Images/Headshots/Coach Carline.jpg" alt="Coach Caroline Patten">
        <figcaption></figcaption>
    </figure>
    </div>

    <div>
<p>
    <!--this will eventually be a called script sending a variable and then retrieving the file based off the variable sent eg. aboutOurCoach-->
    <?php
        $string = file_get_contents('Text/AboutOurCoach.txt');

    print('<p>'.$string.'</p>');
    ?>
</p>

    </div>
</div>


</body>

