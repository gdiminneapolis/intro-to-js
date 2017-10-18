var people = [
    {
        "firstName": "Rachel",
        "lastName": "Walberg"
    },
    {
        "firstName": "Amanda",
        "lastName": "Underwood"
    }
];

function getFullName(person){
    return person["firstName"] + " " + person["lastName"];
}

console.log(getFullName(people[0])); // logs "Rachel Walberg"

people[0]["lastName"] = "Walwood";

console.log(getFullName(people[0])); // logs "Rachel Walwood"
