var course = {
    "name": "Intro to JavaScript",
    "teacher": "Amy Gebhardt",
    "location": "PowerObjects",
    "tas": [
        {"firstName": "Michelle", "lastName": "Schulp"},
        {"firstName": "Clare", "lastName": "Oneil"},
        {"firstName": "Tamara", "lastName": "Temple"},
        {"firstName": "Susan", "lastName": "Metoxen"}
    ],
    "listTAs": function(fullName) {
        var output = "";
        for (var i = 0; i < this.tas.length; i++){
            var ta = this.tas[i];
            output += ta.firstName;
            if(fullName){
                output += " " + ta.lastName;
            }
            output += " | ";
        }
        console.log(output);
    }
};

// list the TAs (with their full name) for the Into to JS course
course.listTAs(true);