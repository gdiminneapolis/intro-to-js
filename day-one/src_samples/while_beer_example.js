var bottleCount = 99;

while (bottleCount >= 1) {

    var message = "Take one down, and pass it around. " + bottleCount + " bottle";

    if (bottleCount != 1) {
        message += "s"
    }

    message += " of beer on the wall!";
    console.log(message);

    bottleCount--;
}