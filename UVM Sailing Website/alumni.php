<?php
include("top.php");
include("nav.php")
?>

<div class="bodyColor container alignAsRow">

    <div>
        <h1>
            Alumni:
        </h1>
        <!--this will eventually be a called script sending a variable and then retrieving the file based off the variable sent eg. aboutOurCoach-->
        <?php
        $string = file_get_contents('Text/AboutAlumniWithTags.txt');

        print('<p>'.$string.'</p>');
        ?>


    </div>


    <div>
    <form  role="form" action="sendAlumMail.php" enctype="text/plain" method="get">

        <h3 class = "center">Subscribe to the Alumni Mailing List:</h3>

        <div class="formItem">
            <label for="FirstName">First Name: </label>
            <input name="First" type="text" class="form-control" id="FirstName" placeholder="First Name">
        </div>

        <div class="formItem">
            <label for="LastName">Last Name: </label>
            <input name="Last" type="text" class="form-control" id="LastName" placeholder="Last Name">
        </div>

        <div class="formItem">
            <label for="email">Email: </label>
            <input name="Email" type="email" class="form-control" id="Email" placeholder="Email">
        </div>

        <div class="formItem">
            <label>Tell us a little about yourself: </label>
            <textarea rows="5" class="form-control" name="Comments"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
    </div>
</div>
</body>

