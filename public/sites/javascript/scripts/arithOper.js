function getArea(length, width) {
    let area;
    // Write your code here
    area = length * width;

    console.log("area: " + area);
    return area;
}
getArea(3, 5);

function getPerimeter(length, width) {
    let perimeter;
    // Write your code here
    perimeter = (2 * length) + (2 * width);

    console.log("perimeter: " + perimeter);
    return perimeter;
}

getPerimeter(3, 5);