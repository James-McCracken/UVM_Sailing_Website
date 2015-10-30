<?php
include("top.php");
include("nav.php")
?>

<div class="bodyColor container">
    <div>
        <h1>
            Alumni:
        </h1>

        <p>Surely there's no such thing as too much support when it comes to our favorite student organization.
            The most obvious form of support is financial, but we know there's more to it than that.
            In the event that in the future, the Catamount's require support that is either of a different variety,
            or more significant than our annual personal donations, and in order to strengthen the connection our
            alumni have to the program as years-since-graduation accumulate, We will be working this fall to:</p>
        <ul>
            <li><p>Solicit input from alumni as to how we can support Vermont Sailing ever more thoroughly</p></li>
            <li><p>Assist the team in growing and maintaining the book of alumni contact information so that interested
                graduates can stay up-to-date.</p>
            </li>
            <li><p>Increase the frequency of communication within the greater body of alumni to more than once or twice a
                year, but not so often that it feels like spam.</p>
            </li>
        </ul>
        <p>If you have questions, ideas, or just want to talk about college sailing, please fill out our form and you
            will be added to the UVM Sailing alumni mailing list.
        </p>
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

