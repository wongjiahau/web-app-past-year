var images = JSON.parse(localStorage["images"]);

var pointer = 0;

function changeImage () {
    var imageElement = document.getElementById("image");
    var currentImage = images[pointer];
    imageElement.src = currentImage.file;
    imageElement.alt = currentImage.description;
    pointer++;
    if(pointer === images.length) {
        pointer = 0;
    }
}

setInterval(changeImage, 5000);
