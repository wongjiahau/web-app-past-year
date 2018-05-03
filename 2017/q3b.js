function render(data) {
    var firstPic = data[0];
    var fig = document.createElement("figure");
    var img = document.createElement("img");
    img.src = firstPic.file;
    img.alt = firstPic.alt;
    var figcap = document.createElement("figcaption");
    figcap.innerHTML = firstPic.caption;
    fig.appendChild(figcap);
    var pictureDiv = document.getElementById("picture");
    pictureDiv.appendChild(fig);

    // Thumbnails part
    var thumbnails = document.getElementById("thumbnails");
    for(var i = 1; i < data.length; i++) {
        var smallImg = document.createElement("img");
        smallImg.src = data[i].file;
        smallImg.alt = data[i].alt;
        thumbnails.appendChild(smallImg);
    }
}