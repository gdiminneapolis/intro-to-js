var rectangle = {
    "length": 3,
    "width": 2,
    "defaultUnit": "inches",
    "size": function(unit) {
        var output = this.width * this.length;
        var sizeUnit = this.unit;
        if (unit) {
          sizeUnit = unit;
        }
        console.log("The rectangle is " + output + " " + unit + " square");
    }
};

// Output the size of the rectangle in feet
rectangle.size("feet");
// Output the size of the rectangle using the default unit
rectangle.size();
