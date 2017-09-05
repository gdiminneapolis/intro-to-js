<section>

    <h4 class="white">
        <span class="gold uppercase">conditional statements</span> are used to execute different blocks of code based on conditions.
    </h4>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        The syntax looks like this:
    </div>

    <div class="fragment meta white tiny_meta" style="height:400px;">
        <pre class="language-markup" data-src="src_samples/conditional_syntax.js"></pre>
    </div>

</section>

<section>

    <h4 class="white">
        This is where our <span class="gold uppercase">boolean</span> data types will come in handy.
    </h4>

    <div class="spacer"></div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:400px;">
        <pre class="language-markup" data-src="src_samples/conditional_example_one.js"></pre>
    </div>


</section>

<section>


    <h4 class="white">
        We'll use a bunch of <span class="gold uppercase">comparison operators</span> with conditional statements.
    </h4>

    <section>
        <div class="spacer big_spacer"></div>

        <table class="wide_table">

            <tr class="header_row">
                <td>Operator</td>
                <td>Description</td>
                <td>Result</td>
            </tr>

            <tr>
                <td>a == b</td>
                <td>Equal</td>
                <td><span class="monaco_font">true</span> if <span class="monaco_font">a</span> and <span class="monaco_font">b</span> have the same value.</td>
            </tr>

            <tr>
                <td>a === b</td>
                <td>Identical</td>
                <td><span class="monaco_font">true</span> if <span class="monaco_font">a</span> and <span class="monaco_font">b</span> have the same value and the same type.</td>
            </tr>

            <tr>
                <td>a != b</td>
                <td>Not equal</td>
                <td><span class="monaco_font">true</span> if <span class="monaco_font">a</span> and <span class="monaco_font">b</span> do not have the same value.</td>
            </tr>

            <tr>
                <td>a !== b</td>
                <td>Not identical</td>
                <td><span class="monaco_font">true</span> if <span class="monaco_font">a</span> and <span class="monaco_font">b</span> do not have the same value or do not have the same type.</td>
            </tr>


        </table>

    </section>

    <section>
        <div class="spacer"></div>

        <table class="wide_table">

            <tr class="header_row">
                <td>Operator</td>
                <td>Description</td>
                <td>Result</td>
            </tr>

            <tr>
                <td>a < b</td>
                <td>Less than</td>
                <td><span class="monaco_font">true</span> if <span class="monaco_font">a</span> is less than <span class="monaco_font">b</span>.</td>
            </tr>

            <tr>
                <td>a > b</td>
                <td>Greater than</td>
                <td><span class="monaco_font">true</span> if <span class="monaco_font">a</span> is greater than <span class="monaco_font">b</span>.</td>
            </tr>

            <tr>
                <td>a <= b</td>
                <td>Less than or equal to</td>
                <td><span class="monaco_font">true</span> if <span class="monaco_font">a</span> is less than or equal to <span class="monaco_font">b</span>.</td>
            </tr>

            <tr>
                <td>a >= b</td>
                <td>Greater than or equal to</td>
                <td><span class="monaco_font">true</span> if <span class="monaco_font">a</span> is greater than or equal to <span class="monaco_font">b</span>.</td>
            </tr>


        </table>
    </section>

</section>


<section>

    <h4 class="white">
        Pay special attention to the <span class="gold monaco_font">==</span>/<span class="gold monaco_font">===</span> operators! It's easy to want to use <span class="gold monaco_font">=</span>,<br />but that <i>assigns</i> a value, it doesn't <i>compare</i> a value.
    </h4>

</section>


<section>

    <h4 class="white">
        The <span class="gold uppercase">else statement</span> is a block of code executed if the condition is false.
    </h4>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        The syntax looks like this:
    </div>

    <div class="fragment meta white tiny_meta" style="height:400px;">
        <pre class="language-markup" data-src="src_samples/conditional_syntax_else.js"></pre>
    </div>

</section>

<section>

    <h3 class="blue">
        Let's try it together!
    </h3>


    <h4>
        What will be logged in the console?
    </h4>

    <section>

        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/1.js"></pre>
        </div>

        <div class="fragment tiny_meta gold">
           <img src="../images/true.png">
        </div>

    </section>

    <section>
        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/2.js"></pre>
        </div>

        <div class="fragment tiny_meta gold">
            <img src="../images/true.png">
        </div>

    </section>

    <section>
        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/3.js"></pre>
        </div>

        <div class="fragment tiny_meta gold">
            <img src="../images/false.png">
        </div>

    </section>

    <section>
        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/4.js"></pre>
        </div>

        <div class="fragment tiny_meta gold">
            <img src="../images/true.png">
        </div>

    </section>

    <section>
        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/5.js"></pre>
        </div>

        <div class="fragment tiny_meta gold">
            <img src="../images/false.png">
        </div>

    </section>

    <section>
        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/6.js"></pre>
        </div>

        <div class="fragment tiny_meta gold">
            <img src="../images/true.png">
        </div>

    </section>

    <section>
        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/7.js"></pre>
        </div>

        <div class="fragment tiny_meta gold">
            <img src="../images/true.png">
        </div>

    </section>

    <section>
        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/8.js"></pre>
        </div>

        <div class="fragment tiny_meta gold">
            <img src="../images/true.png">
        </div>

    </section>

    <section>
        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/9.js"></pre>
        </div>


        <div class="fragment tiny_meta gold">
            <img src="../images/true.png">
        </div>

    </section>

    <section>
        <span class="spacer big_spacer"></span>

        <div class="meta white tiny_meta skinny_pre" style="height:290px;">
            <pre class="language-markup" data-src="src_samples/conditional_operators/10.js"></pre>
        </div>

        <div class="fragment tiny_meta gold">
            <img src="../images/false.png">
        </div>

    </section>

</section>

<section>

    <h4 class="white">
        Use the <span class="gold uppercase">else if statement</span> to <br /> specify a new condition if the previous condition is false.
    </h4>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        The syntax looks like this:
    </div>

    <div class="fragment meta white tiny_meta" style="height:400px;">
        <pre class="language-markup" data-src="src_samples/conditional_syntax_else_if.js"></pre>
    </div>

</section>

<section class="">

    <h4 class="blue">
        Let's try it!
    </h4>

    <span class="spacer"></span>

    <div class="meta white tiny_meta">
        Return to your <span class="gold">scripts.js</span>.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white tiny_meta">
        Create a variable named <span class="monaco_font gold">age</span> & give it a float value.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white tiny_meta">

        Display the name of the age group the number falls into based on the following:
        <span class="spacer"></span>

        <table class="small_font_table">

            <tr class="header_row">
                <td>age</td>
                <td>group name</td>
            </tr>

            <tr>
                <td>less than 1</td>
                <td>infant</td>
            </tr>

            <tr>
                <td>1-3</td>
                <td>toddler</td>
            </tr>

            <tr>
                <td>4-11</td>
                <td>child</td>
            </tr>

            <tr>
                <td>12</td>
                <td>preteen</td>
            </tr>

            <tr>
                <td>13-18</td>
                <td>teenager</td>
            </tr>

            <tr>
                <td>greater than or equal to 18</td>
                <td>adult</td>
            </tr>

        </table>
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white tiny_meta">
        Try a bunch of different values for age and display each result.
    </div>

    <div class="js_fiddle_link">
        <a class="logo" href="http://jsfiddle.net/ons4f2kc/" target="_blank">See a solution</a>
    </div>


</section>
