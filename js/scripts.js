
$( document ).ready(function() {

    // Full list of configuration options available at:
    // https://github.com/hakimel/reveal.js#configuration
    Reveal.initialize({
        controls: true,
        progress: true,
        history: true,
        center: true,
        slideNumber: true,
        transition: 'slide' // none/fade/slide/convex/concave/zoom

        // Optional reveal.js plugins
        //dependencies: [
        //    { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
        //    { src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
        //    { src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
        //    { src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
        //    { src: 'plugin/zoom-js/zoom.js', async: true },
        //    { src: 'plugin/notes/notes.js', async: true }
        //]
    });

    var big_image = document.getElementById("large_image");
    var thumbnails = document.getElementsByClassName("thumbnail");

    for (var i = 0; i < thumbnails.length; i++){

        thumbnails[i].addEventListener("click", function(){

            var currently_selected = document.getElementById("selected_thumb");

            if(currently_selected){
                currently_selected.setAttribute("id", "");
            }

            big_image.innerHTML = this.innerHTML;

            this.setAttribute("id", "selected_thumb");

        });

    }

});