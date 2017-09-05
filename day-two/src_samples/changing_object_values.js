var people = [
    {
        "firstName": "Amy",
        "lastName": "Hammond"
    },
    {
        "firstName": "Rick",
        "lastName": "Gebhardt"
    }
];

function getFullName(person){
    return person["firstName"] + " " + person["lastName"];
}

console.log(getFullName(people[0])); // logs "Amy Hammond"

people[0]["lastName"] = "Gebhardt";

console.log(getFullName(people[0])); // logs "Amy Gebhardt"