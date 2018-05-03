var persons = [{"name": "hello", "gender": "hello"}];
var ol = document.createElement("ol");
ol.type = "1";

// When to use setAttribute? 
// I also tak tau
// Refer https://stackoverflow.com/questions/3919291/when-to-use-setattribute-vs-attribute-in-javascript

for (var i = 0; i < persons.length; i++) {
    var li = document.createElement("li");
    var personName = persons[i].name;
    var gender     = persons[i].gender;
    li.appendChild(document.createTextNode(personName + "(" + gender + ")"));
    ol.appendChild(li);
}

document.getElementById("myDiv").appendChild(ol);