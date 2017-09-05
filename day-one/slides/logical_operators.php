<section>

    <h4 class="white">
        <span class="gold uppercase">logical operators</span> determine what happens between variables or values.
    </h4>

    <div class="spacer"></div>


    <div class="meta white small_meta fragment">
        Given that:
    </div>

    <div class="fragment meta white tiny_meta skinny_pre">
        <pre class="language-javascript">a = 1;
b = 2;</pre>
    </div>

    <div class="spacer"></div>


    <table class="wide_table fragment">

        <tr class="header_row">
            <td>Operator</td>
            <td>Description</td>
            <td>Example</td>
            <td>Result</td>
        </tr>

        <tr>
            <td>&&</td>
            <td>And</td>

            <td>(a < 3) && (b == 2)</td>
            <td><span class="monaco_font fragment">true</span></td>
        </tr>

        <tr>
            <td>||</td>
            <td>Or</td>
            <td>(a == 5) || (b == 5)</td>
            <td><span class="monaco_font fragment">false</span>
        </tr>

        <tr>
            <td>!</td>
            <td>Not</td>

            <td>!(a == b)</td>
            <td><span class="monaco_font fragment">true</span>
        </tr>

    </table>

</section>

<section>

    <div class="meta white small_meta">
        Now you can combine conditions!
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:540px;">
        <pre class="language-markup" data-src="src_samples/logical_operators.js"></pre>
    </div>

    <div class="meta gold tiny_meta fragment">
        This can be simplified. Any ideas?
    </div>

</section>

