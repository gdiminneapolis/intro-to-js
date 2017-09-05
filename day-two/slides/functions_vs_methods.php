<section>

    <h3 class="blue">
        Functions vs. Methods
    </h3>

    <div class="spacer big_spacer"></div>

    <div class="meta white meta fragment">
        JavaScript uses <span class="gold">OBJECTS</span>.
    </div>

    <div class="spacer big_spacer"></div>

    <div class="meta white meta fragment">
        Objects come with a set of functions that are specific for <i>them</i> to use. These are <span class="gold uppercase">methods</span>.
    </div>

</section>

<section>

    <div class="meta white">
        We've seen a few examples already:
    </div>

    <div class="fragment meta white tiny_meta skinny_pre">
        <pre class="language-javascript"><code>window.alert();</code></pre>
    </div>

    <span class="spacer tiny_spacer"></span>

    <div class="fragment meta white tiny_meta skinny_pre">
        <pre class="language-javascript"><code>document.write();</code></pre>
    </div>

    <span class="spacer tiny_spacer"></span>

    <div class="fragment meta white tiny_meta skinny_pre">
        <pre class="language-javascript"><code>console.log();</code></pre>
    </div>

    <span class="spacer"></span>


    <div class="meta white small_meta fragment">
        <span class="monaco_font">window, document,</span> and <span class="monaco_font">console</span> are all <span class="gold">objects</span>.
    </div>

    <span class="spacer"></span>

    <div class="meta white small_meta fragment">
        <span class="monaco_font">alert, write,</span> and <span class="monaco_font">log</span> are all <span class="gold">methods</span>.
    </div>

</section>

<section>

    <div class="meta white">
        Arrays, Strings, Integers, (and lots of others!) all come with several <span class="gold">methods</span> and <span class="gold">properties</span> specifically for their data types.
    </div>

</section>

<section>

    <div class="meta white">
        The concept of methods and functions are <br />very similar, but <span class="gold">functions</span> will not be called<br /> with the <span class="gold monaco_font">.</span> following the variable because <br /> they are not specific to the object.
    </div>


    <div class="fragment meta white tiny_meta">
        <pre class="language-javascript"><code>getFullName("Amy", "Gebhardt"); // this is a function that takes 2 arguments.
myArray.push("a new item"); // this is an array method that takes 1 argument.</code></pre>
    </div>
    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white fragment">
        When using an object <span class="gold">property</span> it will <br />not have <span class="gold monaco_font">( )</span> following the name.
    </div>


    <div class="fragment meta white tiny_meta">
        <pre class="language-javascript"><code>var x = myArray.length; // set the value of x to the length of my_array accessed via the length property.</code></pre>
    </div>



    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta blue tiny_meta fragment">
        Don't worry about this too much for now - we'll dive into objects more in depth later.
    </div>

</section>

<section>

    <h3 class="blue">
        Back to arrays...
    </h3>

</section>