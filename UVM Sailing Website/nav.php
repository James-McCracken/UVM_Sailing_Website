<?php ?>


<!-- /.navbar-header -->

<nav class=navContainer>

        <img src="Images/RallyCat.jpg" alt="Rally Cat">


    <ul class="navLinksList">
        <?php
        //About
        if ($path_parts['filename'] == "index") {
            print '<li><a href="index.php">Home</a></li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
        //About our coach page
        if ($path_parts['filename'] == "aboutOurCoach") {
            print '<li><a href="aboutOurCoach.php">About Our Coach</a></li>';
        } else {
            print '<li><a href="aboutOurCoach.php">About Our Coach</a></li>';
        }
        //Alumni Page
        if ($path_parts['filename'] == "calendar") {
            print '<li><a href="calendar.php">Calendar</a></li>';
        } else {
            print '<li><a href="calendar.php">Calendar</a></li>';
        }
        //Recruiting (form)
        if ($path_parts['filename'] == "Recruiting") {
            print '<li>Recruiting</li>';
        } else {
            print '<li><a href="recruiting.php">Recruiting</a></li>';
        }
        //Team Roster
        if ($path_parts['filename'] == "Roster") {
            print '<li>Roster</li>';
        } else {
            print '<li><a href="roster.php">Roster</a></li>';
        }
        //Alumni Page
        if ($path_parts['filename'] == "alumni") {
            print '<li><a href="alumni.php">Alumni</a></li>';
        } else {
            print '<li><a href="alumni.php">Alumni</a></li>';
        }
        ?>
    </ul>
    <ul class=navSocialMedia>
        <li>
            <a class = "socialMediaIcon" href="https://www.facebook.com/pages/UVM-Sailing-Team/255202822590?fref=ts">
                <img class="social-icon" src="Images/facebook.png" alt="Visit us on facebook"/>
            </a>
        </li>
        <li>
            <a class = "socialMediaIcon" href="https://twitter.com/UVMSailingTeam">
                <img class="social-icon" src="Images/twitter.png" alt="Visit us on Twitter"/>
            </a>
        </li>
        <li>
            <a class = "socialMediaIcon" href="mailto:catamountSailing@gmail.com">
                <img class="social-icon" src="Images/email.png" alt="mail us"/>
            </a>
        </li>
    </ul>
</nav>
