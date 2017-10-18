var person = {
    "firstName": "Rachel",
    "lastName": "Walwood",
    "eyeColor": "Blue",
    "profession": "Software Developer",
    "hobbies": ["Yoga", "Playing with my pup", "Knitting"]
};

function getFullName() {
    return person["firstName"] + " " + person.lastName;
}

console.log(getFullName());
