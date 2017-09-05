if (hasLicense || ruleBreaker) {
    shouldDrive = true;
}
else {
    if (age < 15) {
        shouldDrive = false;
    }
    else {
        if (hasPermit && withParent) {
            shouldDrive = true;
        }
        else {
            shouldDrive = false;
        }
    }
}

console.log(shouldDrive);