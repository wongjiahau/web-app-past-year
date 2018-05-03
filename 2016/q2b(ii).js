var lis = document.getElementsByTagName("li");

for(var i = 0; i < lis.length; i++) {
    var x = lis[i];
    x.style.fontFamily      = "Helvetica, Arial, Sans-serif";
    x.style.fontSize        = "18px";
    x.style.padding         = "5px 10px 5px 10px"; // top right bottom left 上右下左
    x.style.margin          = "6px";
    x.style.backgroundColor = "yellow";
}