<?php
$images = array(
    array(1, "images/aspen-trees.jpg", "Aspens, Northern New Mexico", "Ansel Adams"),
    array(2, "images/bristlecone-pine.jpg", "Jeffrey Pine, bristlecone pine, Sentinel Dome", "Ansel Adams"),
    array(3, "images/valley-view.jpg", "Yosemite Valley View (Early Summer)", "Ansel Adams"),
    array(4, "images/sand-dunes.jpg", "Sand dunes, 1950", "Ansel Adams"),
    array(5, "images/half-dome.jpg", "Moon and Half Dome, Yosemite National Park, 1960", "Ansel Adams"),
    array(6, "images/snake-river.jpg", "Tetons and The Snake River, Grand Teton National Park", "Ansel Adams")
);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 4: Images</title>
        <meta charset="utf-8">
        <meta name="author" content="Sydney Bertrand">
        <meta name="description" content="CS 008 Lab 4" >
        <link rel="stylesheet" href="css/custom.css?<?php print time(); ?>" type="text/css" media="screen">
    </head>
    <!-- ################ body section ######################### -->
    <body id="lab4">
        <?php
        foreach ($images as $image) {
            ?><figure>
                <img src="<?php print $image[1] ?>" alt="">
                <figcaption><?php print $image[2] ?></figcaption>
            </figure><?php
        }
        ?>
        <figure class="animated"><img src="images/lab4animation.gif" alt="">
            <figcaption>animated image. photo author: Sydney Bertrand</figcaption></figure>
        <figure class="transparent"><img src="images/imageedit_1_3902034927.png" alt=""> <figcaption>transparent image. credit: <a href="https://www.pinterest.com/pin/679339925013072278/">here</a></figcaption> </figure>

    </body>

</html>

