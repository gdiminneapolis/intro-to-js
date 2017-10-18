var person = {
    "firstName": "Rachel",
    "lastName": "Walwood"
};

console.log(person.maidenName); // logs "undefined"

person.maidenName = "Walberg";

console.log(person.maidenName); // logs "Walberg"
