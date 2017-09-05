if (hasLicense || ruleBreaker) {
    shouldDrive = true;
}
else {
    if (age < 15) {
        shouldDrive = false;
    }
    else {
        shouldDrive = (hasPermit && withParent);
    }
}

console.log(shouldDrive);