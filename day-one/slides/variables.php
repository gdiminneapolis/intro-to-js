<section>

    <h3 class="white">
        A <span class="gold">VARIABLE</span> stores values.
    </h3>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        It can hold different types of information, like <br />words and numbers. These are called <span class="gold">DATA TYPES</span><br /> and there are quite a few of them.
    </div>


    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        The <span class="blue">value</span> can change.
    </div>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        A variable can have a <span class="blue">null</span> value <br />which means it is not currently storing anything.
    </div>

</section>

<section>

    <h3 class="white">
        A <span class="gold">VARIABLE</span> stores values.
    </h3>

    <div class="spacer big_spacer"></div>


    <div class="meta white big_meta">
        When you create a variable you <span class="gold">DECLARE</span> it.
    </div>

    <div class="spacer"></div>

    <div class="meta white small_meta fragment">
        A variable has an <span class="blue">undefined</span> value <br /> if it is declared without setting a value.
    </div>

    <div class="spacer"></div>

    <div class="meta white small_meta fragment">
        New variables must have a unique name.
    </div>

    <div class="spacer"></div>

    <div class="meta white small_meta fragment">
        Variable names can only contain letters, numbers, $, or _.
    </div>

    <div class="spacer"></div>

    <div class="meta white small_meta fragment">
        Variable names cannot begin with a number.
    </div>

</section>


<?php require('best_practices.php'); ?>


<section>

    <?php require('variable_table_example.php'); ?>

</section>


<section>

    <h3 class="white">
        Let's start with <span class="blue">First Name</span>
    </h3>

    <div class="spacer big_spacer"></div>

    <div class="meta white big_meta fragment">
        Come up with a <span class="gold">name</span> for the variable.
    </div>

    <div class="fragment meta white tiny_meta skinny_pre">
        <pre class="language-javascript"><code>firstName</code></pre>
    </div>

    <div class="spacer big_spacer"></div>

    <div class="meta white big_meta fragment">
        <span class="gold">Declare</span> it using proper syntax.
    </div>

    <div class="fragment meta white tiny_meta skinny_pre">
        <pre class="language-javascript"><code>var firstName;</code></pre>
    </div>

    <div class="spacer"></div>

    <div class="meta tiny_meta white fragment">
        Right now, <span class="blue monaco_font">firstName</span> has an <span class="blue monaco_font">undefined</span> value.
    </div>

</section>


<section>


    <div class="meta white big_meta">
        <span class="gold">Initialize</span> <span class="blue monaco_font">firstName</span> with a value:
    </div>

    <div class="fragment meta white tiny_meta skinny_pre">
        <pre class="language-javascript"><code>var firstName = "Amy";</code></pre>
    </div>

    <div class="spacer"></div>

    <div class="meta small_meta white fragment">
        Note that the value is in quotes.<br /><br />This is because the value is a <span class="gold">STRING</span><br /> and therefore
        <span class="blue monaco_font">firstName</span> is a string.
    </div>

</section>


<section>


    <div class="spacer big_spacer"></div>
    <div class="spacer"></div>

    <div class="meta white big_meta">
        <span class="gold">DATA TYPES</span> we'll be working with for this example include:
    </div>


    <section>
        <div class="spacer"></div>

        <div class="meta blue uppercase">
            strings
        </div>
        <div class="meta tiny_meta white fragment skinny_pre">
            <pre class="language-markup" data-src="src_samples/strings.js"></pre>
        </div>

    </section>



    <section>
        <div class="spacer"></div>

        <div class="meta blue uppercase">
            integers
        </div>
        <div class="meta tiny_meta white skinny_pre">
            <pre class="language-markup" data-src="src_samples/ints.js"></pre>
        </div>

    </section>


    <section>
        <div class="spacer"></div>

        <div class="meta blue uppercase">
            floats
        </div>
        <div class="meta tiny_meta white skinny_pre">
            <pre class="language-markup" data-src="src_samples/floats.js"></pre>
        </div>

    </section>

    <section>

        <div class="meta blue uppercase">
            booleans
        </div>
        <div class="meta tiny_meta white skinny_pre">
            <pre class="language-markup" data-src="src_samples/booleans.js"></pre>
        </div>

    </section>


</section>

<section>

    <?php require('variable_table_example.php'); ?>

</section>


<section>

    <div class="meta white big_meta">
        To <span class="gold">declare</span> and <span class="gold">initialize</span> <br />each of these it <i>could</i> look like:
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:200px;">
        <pre class="language-markup" data-src="src_samples/variables_all.js"></pre>
    </div>

</section>

<section>

    <div class="meta white big_meta">
        To <span class="gold">use</span> your variables, simply refer to the name of the variable in your code:
    </div>

    <div class="fragment meta white tiny_meta" style="height:200px;">
        <pre class="language-markup" data-src="src_samples/use_variable.js"></pre>
    </div>

</section>

<section>

    <h3 class="blue">
       Let's try it!
    </h3>

    <span class="spacer big_spacer"></span>

    <div class="meta white meta">
        Return to your <span class="gold">scripts.js</span>.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Create a variable.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Give it a valid name and a value.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Display the value.
    </div>

    <div class="js_fiddle_link">
        <a class="logo" href="https://jsfiddle.net/h6bbch5n/" target="_blank">See a solution</a>
    </div>

</section>

<!--<div class="meta white tiny_meta fragment">-->
<!--    Choose your data types wisely - they will have an impact<br /> on how the variables can interact with each other.-->
<!--</div>-->
