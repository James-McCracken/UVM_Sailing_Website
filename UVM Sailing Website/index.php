<?php
include("top.php");
include("nav.php");
?>

<!--
The about page. This page contains reads from the /text directory, and prints the text directly to the page. The .txt file contains the proper tags for the paragraphs, headers, etc.
-->

<div class="bodyColor container">

        <h1>UVM Sailing</h1>

    <div>
    <h2>Our Team:</h2>

        <!--this will eventually be a called script sending a variable and then retrieving the file based off the variable sent eg. aboutOurCoach-->
        <?php
        $string = file_get_contents('Text/Sailing_About.txt');

        print('<p>'.$string.'</p>');
        ?>
git
    <h2>F.A.Q</h2>
        <?php
        $string = file_get_contents('Text/FAQWithTags.txt');

        print ($string);
        ?>

    </div>
</div>

</body>
