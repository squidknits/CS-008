

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5: Working With a CSV File</title>
        <meta charset="utf-8">
        <meta name="author" content="Sydney Bertrand">
        <meta name="description" content="CS 008 Lab 5" >
        <link rel="stylesheet" href="css/custom.css?<?php print time(); ?>" type="text/css" media="screen">
    </head>
    <!-- ################ body section ######################### -->
    <body id="lab5">
        <?php
        // Open a CSV file
        $debug = false;
        if (isset($_GET["debug"])) {
            $debug = true;
        }

        $myFolder = 'data/';

        $myFileName = 'lab5';

        $fileExt = '.csv';

        $filename = $myFolder . $myFileName . $fileExt;

        if ($debug)
            print '<p>filename is ' . $filename;

        $file = fopen($filename, "r");

        if ($debug) {
            if ($file) {
                print '<p>File Opened Succesful.</p>';
            } else {
                print '<p>File Open Failed.</p>';
            }
        }
        ?>
        <?php
        if ($file) {
            if ($debug)
                print '<p>Begin reading data into an array.</p>';

            // read the header row, copy the line for each header row
            // you have.
            $headers[] = fgetcsv($file);

            if ($debug) {
                print '<p>Finished reading headers.</p>';
                print '<p>My header array</p><pre>';
                print_r($headers);
                print '</pre>';
            }

            // read all the data
            while (!feof($file)) {
                $datapts[] = fgetcsv($file);
            }

            if ($debug) {
                print '<p>Finished reading data. File closed.</p>';
                print '<p>My data array<p><pre> ';
                print_r($datapts);
                print '</pre></p>';
            }
        } // ends if file was opened 
        fclose($file);
        ?>
        <table>
            <tr>
                <th>STATION</th>
                <th>STATION NAME</th>
                <th>DATE</th>
                <th>MTD-PRCP-NORMAL</th>
                <th>MTD-SNOW-NORMAL</th>
                <th>YTD-PRCP-NORMAL</th>
                <th>YTD-SNOW-NORMAL</th>
                <th>DLY-TAVG-NORMAL</th>
                <th>DLY-TMAX-NORMAL</th>
                <th>DLY-TMIN-NORMAL</th>
            </tr>
        <?php
        foreach ($datapts as $datapt) {
            ?>
            <tr>
                <td><?php print $datapt[0] ?></td>
                <td><?php print $datapt[1] ?></td>
                <td><?php print $datapt[2] ?></td>
                <td><?php print $datapt[3] ?></td>
                <td><?php print $datapt[4] ?></td>
                <td><?php print $datapt[5] ?></td>
                <td><?php print $datapt[6] ?></td>
                <td><?php print $datapt[7] ?></td>
                <td><?php print $datapt[8] ?></td>
                <td><?php print $datapt[9] ?></td>
            </tr>
        <?php  
        }
        ?>
            <tr>
                <td colspan="10"><?php echo (count($datapts)-1) ?></td>
            </tr>
        </table>
    </body>

</html>
