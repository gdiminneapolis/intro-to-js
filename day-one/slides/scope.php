<section>

    <h4 class="white">
        <span class="gold uppercase">scope</span> is the set of variables and functions you have access to.
    </h4>

    <div class="spacer big_spacer"></div>

    <h4 class="white fragment">
        Scope can be <span class="gold uppercase">global</span> and <span class="gold uppercase">local</span>.
    </h4>


</section>

<section>

    <h4 class="white">
        Variables declared <i>within</i> a function become <span class="gold uppercase">local</span> to the function.
    </h4>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        This means they can only be accessed within the function.
    </div>

    <div class="spacer"></div>

    <div class="meta white small_meta fragment">
        They are deleted when the function is completed.
    </div>


    <div class="spacer"></div>

    <div class="meta white small_meta fragment">
        Function parameters work as local variables.
    </div>

</section>

<section>

    <h4 class="white">
        Variables declared <i>outside</i> a function become <span class="gold uppercase">global</span>.
    </h4>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        This means they can be accessed <br />by all scripts and functions on a web page.
    </div>

    <div class="spacer"></div>

    <div class="meta white small_meta fragment">
        They are deleted when you close the web page.
    </div>

    <div class="spacer"></div>

    <div class="meta white small_meta fragment">
        If you assign a value to variable that has not been declared, it will automatically become a global variable.
    </div>


</section>



<section>

    <div class="meta blue small_meta fragment">
        Which variables have <span class="monaco_font white uppercase">global</span> scope?
    </div>

    <span class="spacer"></span>

    <div class="meta blue small_meta fragment">
        Which variables have <span class="monaco_font white uppercase">local</span> scope?
    </div>

    <span class="spacer"></span>

    <div class="meta white tiny_meta skinny_pre" style="height:400px;">
        <pre class="language-markup" data-src="src_samples/scope.js"></pre>
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
        Create a variable that has <span class="monaco_font gold">local</span> scope.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Try to access it from outside of its scope.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        What happens?
    </div>

    <div class="js_fiddle_link">
        <a class="logo" href="http://jsfiddle.net/yqafp0ha/" target="_blank">See a solution</a>
    </div>

</section>