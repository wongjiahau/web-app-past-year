var xhr = new XMLHttpRequest();
xhr.open("GET", "getdata.php", true);
xhr.onreadystatechange = function () {
    if(this.readyState === 4 && 
        (this.status === 200 || this.status === 304)) {
            render(this.responseText);
        }
    else {
        alert("Cannot fetch data from getdata.php");
    }
}
xhr.send();


function render(jsonText) {
    var table = document.createElement("table");

    // Create header
    var headerRow = table.insertRow(-1);
    const HEADINGS = ["City", "Weather", "Temperature"];
    for (let i = 0; i < HEADINGS.length; i++) {
        var th = document.createElement("th");
        th.appendChild(document.createTextNode(HEADINGS[i]));
        headerRow.appendChild(th);
    }

    // Insert data row
    var data = JSON.parse(jsonText);
    for(var i = 0; i < data.length; i++) {
        var tr = table.insertRow(-1);
        for(var j = 0; j < 3; j++) {
            var td = tr.insertCell(-1);
            var innerHtml = data[i][j];
            if (j === 2) {
                innerHtml += "\u2103";
            }
            td.appendChild(document.createTextNode(innerHtml));
        }
    }
}