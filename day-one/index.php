<!DOCTYPE html>

<html lang="en">

    <head>
        <title>Intro to JavaScript: Day 1</title>

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
                <?php require('slides/what_is_javascript.php'); ?>

                <?php require('slides/your_first_code.php'); ?>
                <?php require('slides/external_file.php'); ?>
                <?php require('slides/display_data_recap.php'); ?>
                <?php require('slides/intro_to_dev_tools.php'); ?>
                <?php require('slides/using_the_console.php'); ?>

                <?php require('slides/programming_vocabulary.php'); ?>

                <section>
                    <h2 class="blue uppercase">code comments</h2>
                </section>

                <?php require('slides/comments.php'); ?>

                <section>
                    <h2 class="blue uppercase">variables</h2>
                </section>

                <?php require('slides/variables.php'); ?>

                <section>
                    <h2 class="blue uppercase">operators</h2>
                </section>


                <?php require('slides/operators.php'); ?>
                <?php require('slides/string_operators.php'); ?>

                <section>
                    <h2 class="blue uppercase">functions</h2>
                </section>


                <?php require('slides/functions.php'); ?>

                <section>
                    <h2 class="blue uppercase">scope</h2>
                </section>


                <?php require('slides/scope.php'); ?>

                <section>
                    <h2 class="blue uppercase">conditional statements</h2>
                </section>

                <?php require('slides/the_if_statement.php'); ?>

                <section>
                    <h2 class="blue uppercase">logical operators</h2>
                </section>

                <?php require('slides/logical_operators.php'); ?>

                <section>
                    <h2 class="blue uppercase">loops</h2>
                </section>

                <?php require('slides/while_loops.php'); ?>

                <section>
                    <h2 class="blue uppercase">Questions?</h2>
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