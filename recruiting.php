<?php
include("top.php");
include("nav.php")
?>

<div>
    <h1>
        Recruiting: If interested, fill out the form below
    </h1>
</div>
<br>
<form class="formBodyColor container" role="form" action="send_mail.php" enctype="text/plain" method="get">

    <div class = "formItem">
        <!--<div class = 'left'>--><label for="FirstName">First Name: </label><!--</div>-->
        <!--<div class = 'right'>--><input name="First" type="text" class="form-control" id="FirstName" placeholder="First Name"><!--</div>-->
    </div>

    <div class = "formItem">
        <label for="LastName">Last Name: </label>
        <input name="Last" type="text" class="form-control" id="LastName" placeholder="Last Name">
    </div>

    <div class = "formItem">
        <label for="email">Email: </label>
        <input name="Email" type="email" class="form-control" id="Email" placeholder="Email">
    </div>

    <div class = "formItem">
        <label for="Gender">Gender: </label>

        <label>
            <input type="radio" name="Gender" id="male" value="male" checked>Male
        </label>
        <label>
            <input type="radio" name="Gender" id="female" value="female">Female
        </label>
    </div>


    <div class = "formItem">
        <label for="Position">Position: </label>

        <!--<div class = "right"><!--to put everything to the right-->
        <label>
            <input type="radio" name="Position" id="skipper" value="skipper" checked>Skipper
        </label>
        <label>
            <input type="radio" name="Position" id="crew" value="crew">Crew
        </label>
        <label>
            <input type="radio" name="Position" id="both" value="both">Both
        </label>
        </div>
    <!--</div>-->

    <div class = "formItem">
        <label>School Year: </label>
        <select>
            <option>H.S. Freshman</option>
            <option>H.S. Sophomore</option>
            <option>H.S. Junior</option>
            <option>H.S. Senior</option>
            <option>UVM Student</option>
            <option>Transfer Student</option>
        </select>
    </div>

    <div class = "formItem">
    <label>City: </label>
    <input name="City" type="text" placeholder="City" class="form-control">
    </div>

    <div class = "formItem">
    <label>State: </label>
    <input name="State" type="text" placeholder="State" class="form-control">
    </div>


    <div class = "formItem">
    <label for="textinput">Postal Code:</label>
    <input name="Zip" type="text" placeholder="Postal Code" class="form-control">
    </div>

    <div class = "formItem">
    <label>Comments: </label>
    <textarea rows="5" class="form-control" name="Comments"></textarea>
    </div>

    <button type="submit">Submit</button>
    <br>
    <br>
</form>
</body>

