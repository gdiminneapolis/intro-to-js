var people = [
    {
        "firstName": "Amy",
        "lastName": "Gebhardt"
    },
    {
        "firstName": "Rick",
        "lastName": "Gebhardt"
    }
];

function getFullName(person){
    return person["firstName"] + " " + person["lastName"];
}

for (var i = 0; i < people.length; i++){
    console.log(getFullName(people[i]));
}