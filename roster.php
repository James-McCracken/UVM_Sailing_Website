<?php
include("top.php");
include("nav.php")
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


print('<h1>Roster: For  the 2015 - 2016 season</h1>');


/*print('<img class = teamPhoto src="Images/UVM2015Team.jpg" alt="">');*/


print('<div class = "'. 'bodyColor ' . 'container' .'">');


print('<table class = "'.'textCenter' .'" align = "center">');
    print('<tr>');
        print('<th>Name</th>');
        print('<th>Graduation Year</th>');
        print('<th>Hometown</th>');
        print('<th>High School</th>');
    print('</tr>');
foreach ($records as $oneRecord) {
    if ($oneRecord[0] != "") {  //the eof would be a ""
        print "\n";
        print("<tr><td>" . $oneRecord[0] . "</td><td>" . $oneRecord[1] . "</td><td>" . $oneRecord[2] . "</td><td>" . $oneRecord[3] . "</td></tr>");
        print "\n";
    }
}
print ("</table>");

print('</div>');

if ($debug) {
    print "<p>End of processing.</p>\n";
}

?>
</body>

