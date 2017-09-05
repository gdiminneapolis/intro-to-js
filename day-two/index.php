<!DOCTYPE html>

<html lang="en">

<head>
    <title>Intro to JavaScript: Day 2</title>

    <link rel="stylesheet" type="text/css" href="../css/reveal.css">
    <link rel="stylesheet" type="text/css" href="../prism/prism.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">

    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/reveal.js"></script>

    <script type="text/javascript" src="../prism/prism.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>

    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>

<body>

<div class="reveal" id="gdi">

    <div class="slides">

        <?php require('slides/intro.php'); ?>

        <section>
            <h2 class="blue uppercase">arrays</h2>
        </section>

        <?php require('slides/arrays.php'); ?>

        <section>
            <h2 class="blue uppercase">quick detour...</h2>
        </section>

        <?php require('slides/functions_vs_methods.php'); ?>

        <?php require('slides/arrays_part_two.php'); ?>

        <section>
            <h2 class="blue uppercase">Objects</h2>
        </section>

        <?php require('slides/objects.php'); ?>

        <section>
            <h2 class="blue uppercase">Anatomy of a Website Review</h2>
        </section>

        <?php require('slides/website_review.php'); ?>

        <section>
            <h2 class="blue uppercase">Manipulating the DOM</h2>
        </section>

        <?php require('slides/select_elements.php'); ?>

        <section>
            <h2 class="blue uppercase">Events</h2>
        </section>

        <?php require('slides/events.php'); ?>

        <section>
            <h2 class="blue uppercase">Photo Gallery</h2>
        </section>

        <?php require('slides/gallery_example.php'); ?>

        <section>
            <h2 class="blue uppercase monaco_font">window.alert(<span class='white'>"You are champions!"</span>);</h2>
        </section>

        <section class="left_align">

            <h2 class="blue uppercase">Thanks for coming!</h2>

            <div class="spacer"></div>

            <div class="meta big_meta pink">
                We love your feedback!
            </div>

            <div class="meta white small_meta small_top_margin">
                tinyurl.com/gdi-js <span class="blue">|</span> <span class="gold">Use course name "Intro to JS"</span>
            </div>

            <div class="spacer big_spacer"></div>

            <div class="meta tiny_meta white">
                Take the survey before you go, and you'll have a chance to win a prize!
            </div>

        </section>


    </div>

    <footer>

        <div id="twitter">
            <img src="../images/twitter.png">
            @GDImpls &#8729; @amlyhamm &#8729; #introToJS
        </div>

    </footer>

</div>

</body>

</html>