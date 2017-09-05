var shouldLog = true;

function logName(name) {
    if (shouldLog) {
        console.log(name);
    }
}

logName("Amy"); // logs "Amy" in the console.

shouldLog = false;

logName("Amy"); // nothing happens.

