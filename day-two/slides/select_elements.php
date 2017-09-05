<section>

    <h4 class="white">
        JavaScript can access and change <i>all</i> elements of an HTML document.
    </h4>

    <div class="spacer big_spacer"></div>

    <div class="meta white small_meta fragment">
        There are various <span class="gold">methods</span> and <span class="gold">properties</span> you can use
        when accessing and changing the DOM in JavaScript.
    </div>

</section>


<section>

    <h4 class="white">
        Our first <span class="gold">method</span> is <span class="gold monaco_font">getElementById</span>.
    </h4>

    <div class="meta white small_meta fragment small_top_margin">
        <span class="gold">getElementId</span> is a method on the <span class="gold monaco_font">document</span> object.
    </div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:350px;">
        <pre class="language-markup" data-src="src_samples/getElementById.html"></pre>
    </div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:720px;">
        <pre class="language-markup" data-src="src_samples/getElementByIdJS.js"></pre>
    </div>

</section>


<section>

    <h4 class="white">
        Our first <span class="gold">property</span> is <span class="gold monaco_font">innerHTML</span>.
    </h4>

    <div class="meta white small_meta fragment small_top_margin">
        <span class="gold">innerHTML</span> is a property of a selected element.<br />It can be read and changed.
    </div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:360px;">
        <pre class="language-markup" data-src="src_samples/innerHTML.html"></pre>
    </div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:720px;">
        <pre class="language-markup" data-src="src_samples/innerHTMLJS.js"></pre>
    </div>

</section>

<section>

    <h3 class="blue">
        Let's try it!
    </h3>

    <span class="spacer big_spacer"></span>

    <div class="meta white meta">
        Return to your <span class="gold">index.html</span>.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Add a new div with an ID of <span class="monaco_font">girlDevelopIt</span>.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Add some text to your new div.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Return to your <span class="gold">scripts.js</span>.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white meta">
        Display the contents of your girlDevelopIt div.
    </div>

    <div class="js_fiddle_link">
        <div class="spacer"></div>
        <a class="logo" href="http://jsfiddle.net/jk387c1k/" target="_blank">See a solution</a>
    </div>

</section>

<section>

    <h4 class="white">
        Our <span class="blue">document</span> object is the <span class="blue">DOM</span>.
    </h4>

    <div class="meta white tiny_meta fragment small_top_margin">
        This object comes with several built-in methods. We just used <span class="gold monaco_font">getElementById()</span>.
    </div>

    <div class="meta white tiny_meta fragment small_top_margin">
        There's also  <span class="gold monaco_font">getElementsByTagName()</span> and  <span class="gold monaco_font">getElementsByClassName()</span>
    </div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:320px;">
        <pre class="language-markup" data-src="src_samples/finding_html_elements.html"></pre>
    </div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:720px;">
        <pre class="language-markup" data-src="src_samples/finding_html_elements.js"></pre>
    </div>

</section>


<section>

    <h4 class="white">
        Note the difference between the method names: <span class="gold monaco_font">element</span> vs <span class="gold monaco_font">elements</span>
    </h4>

    <div class="meta white tiny_meta fragment small_top_margin">
        <span class="gold monaco_font">getElementsByTagName()</span> and <span class="gold monaco_font">getElementsByClassName()</span> return an
        <span class="blue">array</span> of elements.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white small_meta fragment small_top_margin">
        What do you think would happen if we tried to <br />access the <span class="gold">innerHTML</span> property on <span class="gold monaco_font">x</span>, <span class="gold monaco_font">y</span>, and <span class="gold monaco_font">z</span>?
    </div>

</section>

<section>

    <div class="meta white small_meta small_top_margin">
        We'll need to loop through <i>each</i> element and access the <span class="gold">innerHTML</span> property individually.
    </div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:220px;">
        <pre class="language-markup" data-src="src_samples/finding_html_elements_each.js"></pre>
    </div>

</section>

<section>

  <h3 class="blue">
      Let's try it!
  </h3>

  <span class="spacer"></span>

  <div class="meta white meta">
      Return to your <span class="gold">index.html</span>.
  </div>

  <span class="spacer"></span>
  <span class="divider"></span>
  <span class="spacer"></span>

  <div class="meta white meta small_meta">
      Add a few new elements (<span class="monaco_font pink">div</span>,
      <span class="monaco_font pink">a</span>, <span class="monaco_font pink">strong</span>, etc) & give those some text/content.
  </div>

  <span class="spacer"></span>
  <span class="divider"></span>
  <span class="spacer"></span>

  <div class="meta white meta small_meta">
      Return to your <span class="gold">scripts.js</span>.
  </div>

  <span class="spacer"></span>
  <span class="divider"></span>
  <span class="spacer"></span>

  <div class="meta white meta small_meta">
      Display the contents of your elements using a
      <span class="monaco_font pink">loop</span> and the
      <span class="monaco_font pink">getElementsByTagName</span> /
      <span class="monaco_font pink">getElementsByClassName</span> methods.
  </div>

  <span class="spacer"></span>
  <span class="divider"></span>
  <span class="spacer"></span>

  <div class="meta white meta tiny_meta">
      Have some extra time? Try looking up
      <span class="monaco_font pink">querySelector</span> and <span class="monaco_font pink">querySelectorAll</span><br />and give those a try!
  </div>


  <div class="js_fiddle_link">
      <div class="spacer"></div>
      <a class="logo" href="https://jsfiddle.net/ouqbaj11/" target="_blank">See a solution</a>
  </div>

</section>

<section>

    <div class="meta white small_meta small_top_margin">
        You can change <span class="gold">attributes</span> on HTML elements.
    </div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:220px;">
        <pre class="language-markup" data-src="src_samples/update_attributes.js"></pre>
    </div>

</section>

<section>

    <div class="meta white small_meta small_top_margin">
        You can change <span class="gold">style</span> on HTML elements.
    </div>

    <div class="meta white tiny_meta fragment small_top_margin">
        For each CSS property, change the name to be <span class="gold">camelCase</span>.
    </div>

    <div class="spacer"></div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:220px;">
        <pre class="language-markup" data-src="src_samples/update_style.js"></pre>
    </div>

</section>

<section>

    <div class="meta white small_meta small_top_margin">
        You can create new HTML <br />elements and add them to the DOM.
    </div>

    <div class="fragment meta white tiny_meta tiny_font_pre skinny_pre" style="height:260px;">
        <pre class="language-markup" data-src="src_samples/adding_elements.js"></pre>
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
        Using JavaScript, change the size and color of the text in your <span class="monaco_font">girlDevelopIt</span> div.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <span class="spacer"></span>

    <div class="left_align">


    <div class="meta blue small_meta">
        Finish early?
    </div>

    <div class="meta white small_meta">
        Add some new text to your <span class="monaco_font">girlDevelopIt</span> div.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white small_meta">
        Using a document method, display the contents of your girlDevelopIt div <i>before</i> and <i>after</i> you add your new text.
    </div>
    </div>

    <div class="js_fiddle_link">
        <div class="spacer"></div>
        <a class="logo" href="http://jsfiddle.net/jk387c1k/2/" target="_blank">See a solution</a>
    </div>

</section>
