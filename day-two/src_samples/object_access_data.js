var person = {
    "firstName": "Amy",
    "lastName": "Gebhardt",
    "eyeColor": "Brown",
    "profession": "Software Developer",
    "hobbies": ["Code", "Ultimate Frisbee", "Making Cake Pops"]
};

function getFullName() {
    return person["firstName"] + " " + person.lastName;
}

console.log(getFullName());