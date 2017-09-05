// Count from 100 to 200
for (let i = 100; i <= 200; i++) {

    console.log('Testing ' + i);

    // Stop at the first multiple of 7
    if (i % 7 === 0) {
        console.log('Found it! ' + i);
        break;
    }

}
