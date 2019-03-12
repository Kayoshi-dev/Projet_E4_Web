var images = [
    "../img/wp.jpg",
    "../img/wp1.jpg"
]

var wp = document.body;
var i = 0;
setInterval(function () {
    wp.style.backgroundImage = "url(" + images[i] + ")";
    i = i + 1;
    if (i == images.length) {
        i = 0;
    }
}, 1000);