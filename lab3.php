<?php
// declare array here
$joesPondWinners = array(
    array(2017, "Emily Wiggett", "North Danville VT", "4/23/17", "4:32 p.m."),
    array(2016, "Pamela Swift", "Barre, VT", "4/12/16", "5:04 p.m."),
    array(2015, "Mary Numa", "West Haven, CT", "4/29/15", "6:14 p.m."),
    array(2014, "Kelsey Phillips and Bill Brochu", "Iowa City IA and Springfield MA", "4/29/14", "10:06 a.m."),
    array(2013, "Gary Clark", "Barre, VT", "4/24/13", "8:46 a.m.")
);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 3: Playing with PHP</title>
        <meta charset="utf-8">
        <meta name="author" content="Sydney Bertrand">
        <meta name="description" content="CS 008 Lab 3" >
        <link rel="stylesheet" href="css/custom.css" type="text/css" media="screen">

    </head>
    <!-- ################ body section ######################### -->
    <body id="lab3">
        <article class='winners'>
            <h1>Number of winners: <?php echo count($joesPondWinners); ?></h1>
            <ol>
                   
<?php
// print array here with your foreach loop
foreach($joesPondWinners as $joesPondWinner){
    print "<li>";
    print "Year: " . $joesPondWinner[0];
    print " Winner: " . $joesPondWinner[1];
    print " From: " . $joesPondWinner[2];
    print " Date: " . $joesPondWinner[3];
    print " Time: " . $joesPondWinner[4];
    print "</li>";

}
?>
            </ol>
        </article>

<?php
// print out the array here with print_r just so you can see what the computer has in memory

print "<p>Contents of array:</p>";
print "<pre>";
print_r($joesPondWinners);
print "</pre>";
?>

    </body>
</html>
        