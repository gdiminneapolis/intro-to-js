<section>

    <h4 class="white">
        An <span class="gold uppercase">object</span> is a special variable that <br /> stores a collection of properties.
    </h4>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        The syntax looks like this:
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:150px;">
        <pre class="language-markup" data-src="src_samples/object_syntax.js"></pre>
    </div>

</section>

<section>

    <h4 class="white">
        The values in an <span class="gold uppercase">object</span> are written as name:value pairs.
    </h4>

    <div class="spacer"></div>


    <div class="fragment meta white tiny_meta skinny_pre" style="height:250px;">
        <pre class="language-markup" data-src="src_samples/object_example.js"></pre>
    </div>


    <div class="meta white small_meta fragment">
        Values in an object can be Strings, <br />Integers, Arrays, other Objects, etc.
    </div>

</section>

<section>

    <div class="meta white small_meta">
        To access a value within an object, you can use<br /> the same <span class="gold">bracket notation</span> that we used with arrays <br />or you can use <span class="gold">dot notation</span>.
    </div>

    <div class="spacer"></div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:410px;">
        <pre class="language-markup" data-src="src_samples/object_access_data.js"></pre>
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
        Create a "person" object that has several <br />different key/value pairs.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Display a few values using bracket notation.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Display a few values using dot notation.
    </div>

    <div class="js_fiddle_link">
        <div class="spacer"></div>
        <a class="logo" href="http://jsfiddle.net/05ndx6fe/" target="_blank">See a solution</a>
    </div>


</section>


<section>

    <div class="meta white small_meta">
        Arrays can contain objects.
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:500px;">
        <pre class="language-markup" data-src="src_samples/people_example.js"></pre>
    </div>

</section>

<section>

    <div class="meta white small_meta">
        Values in objects can be changed.
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:540px;">
        <pre class="language-markup" data-src="src_samples/changing_object_values.js"></pre>
    </div>

</section>

<section>

    <div class="meta white small_meta">
        Key/Value pairs in objects can be added.
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:540px;">
        <pre class="language-markup" data-src="src_samples/adding_values.js"></pre>
    </div>

</section>


<section>

    <div class="meta white small_meta">
        Objects can also hold functions.
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:540px;">
        <pre class="language-markup" data-src="src_samples/functions_in_objects.js"></pre>
    </div>

</section>

<?php require('complex_functions_in_objects_slide.php'); ?>
<?php require('this_keyword.php'); ?>
<?php require('complex_functions_in_objects_slide.php'); ?>

<section class="left_align">

    <div class="meta white big_meta">
        As we learned yesterday, JavaScript provides several built-in objects with a bunch of methods.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white small_meta fragment">
        Can you think of any?
    </div>

    <div class="meta gold small_meta fragment monaco_font small_top_margin">Array</div>
    <div class="meta gold small_meta fragment monaco_font small_top_margin">String</div>
    <div class="meta gold small_meta fragment monaco_font small_top_margin">Document</div>
    <div class="meta gold small_meta fragment monaco_font small_top_margin">Console</div>
    <div class="meta gold small_meta fragment monaco_font small_top_margin">Number</div>
    <div class="meta gold small_meta fragment monaco_font small_top_margin">Date</div>
    <div class="meta gold small_meta fragment monaco_font small_top_margin">Math</div>

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
        Create a "recipe" object. Track <span class="gold monaco_font">name</span>, <span class="gold monaco_font">prepTime</span>, and an array of <span class="gold monaco_font">ingredients</span>.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Create a method that lists all of the ingredients.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Don't forget to display your results somewhere!
    </div>

    <div class="js_fiddle_link">
        <div class="spacer"></div>
        <a class="logo" href="http://jsfiddle.net/g5ac3Lr8/" target="_blank">See a solution</a>
    </div>

</section>