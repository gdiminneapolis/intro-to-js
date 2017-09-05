var person = {
    "firstName": "Amy",
    "lastName": "Gebhardt"
};

console.log(person.maidenName); // logs "undefined"

person.maidenName = "Hammond";

console.log(person.maidenName); // logs "Hammond"