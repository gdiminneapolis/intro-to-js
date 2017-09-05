<section>

    <div class="white small_meta">
        You now have everything you need <br />to build a photo gallery like this:
    </div>

    <div class="fragment" style="height:500px;">

        <div id="gallery">

            <div class="thumbnail"><img src="https://snap-photos.s3.amazonaws.com/img-thumbs/960w/TMYHLN7I7J.jpg" /></div>
            <div class="thumbnail"><img src="https://snap-photos.s3.amazonaws.com/img-thumbs/280h/Y0R3XXMNGZ.jpg" /></div>
            <div class="thumbnail"><img src="https://snap-photos.s3.amazonaws.com/img-thumbs/280h/ZN6L1ZT073.jpg" /></div>
            <div class="thumbnail"><img src="https://snap-photos.s3.amazonaws.com/img-thumbs/280h/SVKP65LN31.jpg" /></div>
            <div class="thumbnail"><img src="https://snap-photos.s3.amazonaws.com/img-thumbs/280h/16VYGB9PG5.jpg" /></div>

        </div>

        <div id="large_image"></div>

    </div>


</section>

<section>
    <h3 class="uppercase no_margin gold">get excited.</h3>
</section>


<section>

    <h4 class="no_margin blue">Let's set up some new project files:</h4>

    <span class="spacer"></span>

    <div class="fragment meta white small_meta">
        In Sublime, open your <span class="gold">index.html</span> <br /> file in the <span class="gold">gallery</span> directory.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="fragment meta white small_meta">
        Add a <span class="gold">script</span> tag at the bottom of the <span class="gold">body</span> and <br />reference the
        <span class="gold">galleryScripts.js</span> file.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>


    <div class="fragment meta white small_meta">
        Save it!
    </div>

<!--    <img src="../images/sublime_directory.png" style="position:absolute;left:-20%;top:20%;">-->

</section>

<section>

    <div class="meta white small_meta">
        In <span class="gold">index.html</span> create 2 divs. To use my styles, make sure one has an ID of <span class="gold">gallery</span> and the other <span class="gold">large_image</span>:
    </div>

    <div class="fragment meta white tiny_meta skinny_pre" style="height:300px;">
        <pre class="language-markup" data-src="src_samples/gallery/index2.html"></pre>
    </div>

    <div class="meta white small_meta fragment">
        The thumbnails will be in the <span class="gold">gallery</span> div.
    </div>

</section>

<section>

    <div class="meta white small_meta">
        Return to <span class="gold">index.html</span>.
    </div>

    <span class="spacer"></span>

    <div class="meta white small_meta">
        Now, create a bunch of thumbnails. Again, for the sake of the demo, use the following structure:
    </div>

    <div class="fragment meta white tiny_meta" style="height:400px;">
        <pre class="language-markup" data-src="src_samples/gallery/index3.html"></pre>
    </div>

    <div class="meta white small_meta fragment">
        Feel free to check it out in your browser.
    </div>

</section>

<section>

    <div class="meta white small_meta">
        Now for the fun part! Time to add some JavaScript.
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

    <div class="meta white small_meta">
        Using whichever <span class="gold">method</span> you prefer, find/select<br /> the <span class="blue monaco_font">large_image</span> div and
        store it in a <span class="gold">variable</span>.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white small_meta">
        Do the same for <i>all</i> <span class="blue monaco_font">thumbnail</span> divs.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white small_meta">
        Do a quick test to ensure you've selected the right nodes. How can you test this?
    </div>

    <div class="js_fiddle_link">
        <a class="logo" href="http://jsfiddle.net/n60qoudL/" target="_blank">See a solution</a>
    </div>

</section>

<section>

    <div class="meta white small_meta">
        Now that we've got the right elements,<br />we need to do something with them.
    </div>

    <span class="spacer"></span>

    <div class="meta big_meta blue">
        What user interaction are we looking for?
    </div>

    <span class="spacer"></span>

    <div class="meta big_meta blue fragment">
        How can we tell when a user <br />clicks on a thumbnail?
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white small_meta fragment">
        Set up a <span class="gold">click</span> event listener for <i>each</i> thumbnail node.
    </div>

    <span class="spacer"></span>

    <div class="meta tiny_meta white fragment">
        You'll need to use a <span class="gold">for loop</span>!
    </div>


    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white small_meta fragment">
        Do a quick test to ensure you've captured <br />the event. How can you test this?
    </div>

    <div class="js_fiddle_link">
        <a class="logo" href="http://jsfiddle.net/n60qoudL/1/" target="_blank">See a solution</a>
    </div>

</section>

<section>

    <h4 class="blue">
        Great! We're capturing the click event for each thumbnail.
    </h4>

    <span class="spacer"></span>

    <div class="meta small_meta white fragment">
        Next, we need to make the clicked image <br />appear in our <span class="gold monaco_font">large_image</span> div.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta small_meta white fragment">
       Remember... we want to take the <span class="blue">contents (html)</span> <br />of our <span class="gold monaco_font">thumbnail</span> div and
        replace the <br /><span class="blue">contents (html)</span> of our <span class="gold monaco_font">large_image</span> div.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta small_meta white fragment">
        On the <span class="blue">click event listener</span> you just created for
        each <br /><span class="monaco_font gold">thumbnail</span>, replace the HTML in the
        <span class="gold monaco_font">large_image</span> div <br />with the thumbnail image.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta white small_meta fragment">
        Test your work!
    </div>

    <div class="js_fiddle_link">
        <br /><br />
        <a class="logo" href="http://jsfiddle.net/n60qoudL/2/" target="_blank">See a solution</a>
    </div>

</section>

<section>

    <h4 class="blue">
        Let's be over-achievers.
    </h4>

    <span class="spacer"></span>


    <div class="meta small_meta white fragment">
        To really make this a solid gallery, we'll want to make a thumnbail appear selected.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta small_meta white fragment">
        In the stylesheet you're using, there is a <span class="gold monaco_font">selected_thumb</span> ID.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta small_meta white fragment">
        When a user clicks on a thumbnail, in addition to making it the large image, <i>select</i> the thumbnail
        by giving it the <span class="gold monaco_font">selected_thumb</span> ID.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta small_meta white fragment">
        Do you anticipate any problems with this? <br />
        <i class="tiny_meta">Hint: you will run into something!</i>
    </div>

    <div class="js_fiddle_link">
        <br /><br />
        <a class="logo" href="http://jsfiddle.net/n60qoudL/4/" target="_blank">See a solution</a>
    </div>

</section>

<section>

    <h4 class="blue">
        Ahh, that's right.
    </h4>

    <span class="spacer"></span>

    <div class="meta small_meta white fragment">
        If there is already a selected thumbnail, we need to remove the ID from that element <i>before</i> we
        add it to our newly selected element.
    </div>

    <span class="spacer"></span>
    <span class="divider"></span>
    <span class="spacer"></span>

    <div class="meta small_meta white fragment">
       Finish up this last step, and your gallery will be complete!
    </div>

    <div class="js_fiddle_link">
        <br /><br />
        <a class="logo" href="http://jsfiddle.net/n60qoudL/5/" target="_blank">See a solution</a>
    </div>

</section>