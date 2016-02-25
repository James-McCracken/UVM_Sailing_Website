<?php
include("toptest.php");
include("nav.php");

?>

<?php
$debug = false;

if (isset($_GET["debug"])) {
    $debug = true;
}

$myFileName = "Sailing_Roster";

$fileExt = ".csv";

$filename = $myFileName . $fileExt;

if ($debug) {
    print "\n\n<p>filename is " . $filename;
}

$file = fopen($filename, "r");

/* the variable $file will be empty or false if the file does not open */
if ($file) {

    if ($debug) {
        print "<p>File Opened</p>\n";
    }
}

/* the variable $file will be empty or false if the file does not open */
if ($file) {
    if ($debug) {
        print "<p>Begin reading data into an array.</p>\n";
    }
    /* This reads the first row, which in our case is the column headers */
    $headers = fgetcsv($file);

    if ($debug) {
        print "<p>Finished reading headers.</p>\n";
        print "<p>My header array<p><pre> ";
        print_r($headers);
        print "</pre></p>";
    }
    /* the while (similar to a for loop) loop keeps executing until we reach
     * the end of the file at which point it stops. the resulting variable
     * $records is an array with all our data.
     */
    while (!feof($file)) {
        $records[] = fgetcsv($file);
    }

    //closes the file
    fclose($file);

    if ($debug) {
        print "<p>Finished reading data. File closed.</p>\n";
        print "<p>My data array<p><pre> ";
        print_r($records);
        print "</pre></p>";
    }
} // ends if file was opened


print('<img class = teamPhoto src="Images/UVM2015Team.jpg" alt="">');


print('<div class = "' . 'tableBodyColor ' . 'container' . '">');


print('<table class = "' . 'textCenter' . '" align = "center">');
print('<tr>');
print('<th>Name</th>');
print('<th>Graduation Year</th>');
print('<th>Hometown</th>');
print('<th>High School</th>');
print('</tr>');


/*foreach ($records as $oneRecord) {
    if ($oneRecord[0] != "") {  //the eof would be a ""
        print "\n";
        /*print("<tr id =". " .'$oneRecord[0]' "."><td>" . $oneRecord[0] . "</td><td>" . $oneRecord[1] . "</td><td>" . $oneRecord[2] . "</td><td>" . $oneRecord[3] . "</td></tr>");
        print '<tr onmouseover = showHeadShot('. str_replace(' ', '_', $oneRecord[0]) . ')>';

        print '<td>' . $oneRecord[0] . "</td><td>" . $oneRecord[1];

        print '<img src = "' . $oneRecord[0]  . '" >' ;
        print ' id ="' . str_replace(' ', '_', $oneRecord[0]) . '">';
        print  "</td><td>" . $oneRecord[2] . "</td><td>" . $oneRecord[3] . "</td></tr>";
        print "\n";
    }
}*/
$i = 0;
foreach ($records as $oneRecord) {
    if ($oneRecord[0] != "") {  //the eof would be a ""
        $i++;
        print "\n";
        print '<tr id ="' . str_replace(' ', '_', $oneRecord[0]) . $i . '" >';
        print '<td>' . $oneRecord[0] . "</td><td>" . $oneRecord[1];
        print  "</td><td>" . $oneRecord[2] . "</td><td>" . $oneRecord[3] . "</td></tr>";
        print "<img src='Images/Headshots/" . $oneRecord[0] . ".jpg'" . "class = 'headShot'" . " id = 'image" . $i . "'>";
    }
}
print ("</table>");

print('</div>');

if ($debug) {
    print "<p>End of processing.</p>\n";
}
?>


<!--creates array for headshots in php and stores them into a js array-->
<!--WORKING!!!! -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

    //this chunck of php code creates an array of locations of each headshot (currently not needed) [could be used to validate if an img tag should be created]
    <?php/*
    $dir = "Images/Headshots/";
    $phpHeadShots = scandir($dir);

    //print "<p> <pre>";
    //print_r($phpHeadShots);
    //print"</pre> </p>";



    print "var jsHeadShots=[";
    $firstTime = true; //for first look to add comma for seperation of values
    foreach($phpHeadShots as $item){

        if(!$firstTime){
            print ", ";

        }

        if (strpos($item , ".") != 0){

        print '"Images/Headshots/' .$item. '" ';
        $firstTime = false;
        }
    }
    print "];";*/
    ?>
    /*NOT WORKING YET*/
    /*    function showHeadShot (id) {
     var headshot;
     for (var i = 0; i <= jsHeadShots.length; i++) {
     if (jsHeadShots[i].contains(id) >= 0) {
     headshot = jsHeadShots[i];
     }//if headshot is found given the table row id, grab the location of that headshot and save it to the variable headshot

     }
     }*/
    <?php
        $i = 0; //reinitialize
        foreach ($records as $oneRecord) { //for each  record in array
            if ($oneRecord[0] != "") {  //the eof would be a ""
                $i++; //counter
                print "\n";
                $idName  = str_replace(' ', '_', $oneRecord[0]) . $i; //create variable to store new id for table row
                $imageID = "image" . $i; //create variable to store id for each image

            //function in js to show headshot of corresponding row that is hovered over (jQuery)
                print '$(document).ready(function(){';
                    print '$("#'. $idName . '").hover(';
                        print 'function () {';
                            print '$("#'. $imageID . '").show();';
                        print '},';
                        print 'function () {';
                            print '$("#'. $imageID . '").hide();';
                        print '  }';
                    print ');';
                print '});';
            }//end if
        }//end foreach
    ?>
</script>

</body>