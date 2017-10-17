var shouldLog = true;

function logName(name) {
    if (shouldLog) {
        console.log(name);
    }
}

logName("Rachel"); // logs "Rachel" in the console.

shouldLog = false;

logName("Rachel"); // nothing happens.
