var xhr = new XMLHttpRequest();
xhr.open("GET", "getdata.php", true);
xhr.onreadystatechange = function () {
    if(this.readyState === 4 && this.status === 200) {
        // Render new element using this.responseText 
    } else {
        alert("Error fetching data from getdata.php");
    }
}
xhr.send();