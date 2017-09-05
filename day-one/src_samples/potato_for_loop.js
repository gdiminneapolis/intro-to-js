var lyrics = "";

for (let i = 1; i <= 7; i++) {

    lyrics += i;

    if (i != 4) {
        lyrics += " potato"
    }

    lyrics += ", ";

    if (i === 7) {
        lyrics += "more!";
    }
}