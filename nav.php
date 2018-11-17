<?php
include ("lab6/art.php");
include ("lab6/contest.php");
include ("lab6/index.php");
include ("lab6/news.php");
include ("lab6/weather.php");
?>
<!DOCTYPE html>
<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        print '<li class="';
        if ($path_parts['lab6/index.php'] == "index") {
            print ' activePage ';
        }
        print '">';
        print '<a href="index.php">Home</a>';
        print '</li>';

        print '<li class="';
        if ($path_parts['lab6/news.php'] == "news") {
            print ' activePage ';
        }
        print '">';
        print '<a href="news.php">News</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['lab6/contest.php'] == "contest") {
            print ' activePage ';
        }
        print '">';
        print '<a href="contest.php">Contest</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['lab6/art.php'] == "art") {
            print ' activePage ';
        }
        print '">';
        print '<a href="art.php">Art</a>';
        print '</li>';
        
        print '<li class="';
        if ($path_parts['lab6/weather.php'] == "weather") {
            print ' activePage ';
        }
        print '">';
        print '<a href="weather.php">Weather</a>';
        print '</li>';
        ?>
    </ol>
</nav>

