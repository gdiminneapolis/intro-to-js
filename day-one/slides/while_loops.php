<section>

    <h4 class="white">
        A <span class="gold uppercase">while loop</span> will repeat the same block of code over and over again until the condition is met.
    </h4>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        The syntax looks like this:
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:400px;">
        <pre class="language-markup" data-src="src_samples/while_syntax.js"></pre>
    </div>

</section>


<section>

    <div class="fragment meta white tiny_meta" style="height:456px;">
        <pre class="language-markup" data-src="src_samples/while_beer_example.js"></pre>
    </div>

    <div class="meta white small_meta fragment">
        How many times will the block of <br/> code within the loop be executed?
    </div>

</section>

<section>

    <h3 class="white">
        An <span class="gold uppercase">infinite loop</span> occurs when the condition to <span class="gold uppercase">break</span> out of the loop can never happen.
    </h3>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:226px;">
        <pre class="language-markup" data-src="src_samples/infinite_loop.js"></pre>
    </div>

</section>


<section>

    <h4 class="white">
        A <span class="gold uppercase">for loop</span> will repeat the same block of code over and over until the counter condition is met.
    </h4>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        The syntax looks like this:
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:400px;">
        <pre class="language-markup" data-src="src_samples/for_syntax.js"></pre>
    </div>

</section>

<section>

    <h4 class="white">
        Brief detour...
    </h4>

    <div class="spacer"></div>

    <pre class="language-markup">var; <span class="white">// what we've been using; behavior can feel unpredictable; older standard</span></pre>
    <pre class="language-markup">let; <span class="white">// block-scoped; value may be reassigned; newer standard</span></pre>
    <pre class="language-markup">const <span class="white">// block-scoped; can not be reassigned; newer standard</span></pre>
    <div class="spacer big_spacer"></div>

    <div class="meta white fragment">
        More info:
        <a href="https://medium.com/javascript-scene/javascript-es6-var-let-or-const-ba58b8dcde75#.kgnywsk53" target="_new">
            JavaScript ES6+: var, let, or const?
        </a>
    </div>

</section>

<section>

    <div class="meta white small_meta">
        What will the value of <span class="monaco_font gold">lyrics</span> be?
    </div>

    <div class="spacer"></div>

    <div class="meta blue tiny_meta fragment">
        Let's step through it together.
    </div>


    <div class="fragment meta white tiny_meta skinny_pre" style="height:456px;">
        <pre class="language-markup" data-src="src_samples/potato_for_loop.js"></pre>
    </div>

    <div class="js_fiddle_link">
        <a class="logo" href="http://jsfiddle.net/xskddg29/" target="_blank">See it in action</a>
    </div>

</section>

<section>

    <h4 class="white">
        To exit a loop before the condition is met, use the <span class="gold uppercase">break</span> statement.
    </h4>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:376px;">
        <pre class="language-markup" data-src="src_samples/break_example.js"></pre>
    </div>

    <div class="meta white small_meta fragment">
        How many times will the loop be executed?
    </div>


    <div class="meta gold tiny_meta fragment">
        When <span class="monaco_font">i === 105</span>, the loop will break (the 6th execution)
    </div>

</section>

<section class="left_align">

    <h4 class="blue">
        Let's try it!
    </h4>

    <span class="spacer"></span>

    <div class="meta white small_meta">
        Return to your <span class="gold">scripts.js</span>.
    </div>

    <span class="spacer"></span>

    <div class="meta white small_meta">
        Write a loop that gives you the 9's times table, so your output looks like:
    </div>

    <div class="meta pink tiny_meta indented">
        <div class="small_top_margin">9 x 1 = 9</div>
        <div class="">9 x 2 = 18</div>
        <div class="">9 x 3 = 27</div>
        <div class="">...</div>
        <div class="">9 x 12 = 108</div>
    </div>

    <span class="spacer"></span>

    <div class="meta blue small_meta">
        Finish early?
    </div>

    <div class="meta white tiny_meta">
        Write a loop that will display the times table for numbers 1-12. The output looks like:
    </div>

    <div class="meta pink tiny_meta indented">
        <div class="small_top_margin">1 x 1 = 1</div>
        <div class="">1 x 2 = 2</div>
        <div class="">1 x 3 = 3</div>
        <div class="">...</div>
        <div class="">1 x 12 = 12</div>
        <div class="">2 x 1 = 2</div>
        <div class="">2 x 2 = 4</div>
        <div class="">...</div>
        <div class="">12 x 12 = 144</div>
    </div>

    <div class="js_fiddle_link">
        <div class="spacer"></div><br />
        <a class="logo" href="http://jsfiddle.net/6jtzj5yd/1/" target="_blank">See a solution for the 9's times table</a><br />
        <a class="logo" href="http://jsfiddle.net/6jtzj5yd/2/" target="_blank">See a solution for the 1-12 times table</a>
    </div>


</section>