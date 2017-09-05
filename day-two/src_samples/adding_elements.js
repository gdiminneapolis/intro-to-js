var paragraph = document.createElement("p");
var node = document.createTextNode("This is new.");

paragraph.appendChild(node);

var content = document.getElementById("content");

content.appendChild(paragraph);

// our content div will now have <p>This is new.</p> inside of it.