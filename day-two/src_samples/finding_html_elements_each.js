var x = document.getElementById("content"); // single element
var y = document.getElementsByTagName("div"); // array of elements
var z = document.getElementsByClassName("girlDevelopIt"); // array of elements

for (var i = 0; i < z.length; i++){
    console.log(z[i].innerHTML);
}
