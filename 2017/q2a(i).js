Array.prototype.contains = function (value) {
    for (let i = 0; i < this.length; i++) {
        if(this[i] === value) {
            return true;
        }
    }
    return false;
}
// Example usage 
var myList = [1,2,3,4,5]

myList.contains(1); // true

myList.contains(99); // false
