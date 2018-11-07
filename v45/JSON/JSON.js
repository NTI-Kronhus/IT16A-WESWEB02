// JSON = JavaScript Object Notation
// JSON är ett standardiserat sätt att beskriva objekt i JavaScript

//Exempel på olika objekt i JavaScript:
var person = {name:"Joakim",age:23,height:185,address:"Kronhusgatan 9"};

var ost1 = {name:"Chevre",weight:850,price:69};
var ost2 = {name:"Feta",weight:1000,price:70};
var ost3 = {name:"Halloumi",weight:500,price:56};

console.log(person);
console.log(ost1);
console.log(ost2);
console.log(ost3);

// Göra strängar till objekt i JavaScript med hjälp av JSON:
// Dubbelcitat-tecken VIKTIGT!
var str_person = '{"name":"Joakim","age":23,"height":185,"address":"Kronhusgatan 9"}';

var str_ost2 = '{"name":"Feta","weight":23,"price":70}';

var object_person = JSON.parse(str_person); // Gör om sträng till object
var object_ost2 = JSON.parse(str_ost2); // Gör om sträng till object

console.log(object_person);
console.log(object_ost2);
