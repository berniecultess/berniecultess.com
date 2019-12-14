"use strict";

function getLetter(s) {
    let letter;

    console.log("Letters: " + s);
    let firstChar = s.charAt(0);
    console.log("First Char: " + firstChar);
    // console.log("Is IN: " + "aeiou".includes(firstChar));

    switch (true) {
        case "aeiou".includes(firstChar):
            letter = "A";
            break;
        case "bcdfg".includes(firstChar):
            letter = "B";
            break;
        case "hjklm".includes(firstChar):
            letter = "C";
            break;
        case "npqrstvwxyz".includes(firstChar):
            letter = "D";
            break;
        default:
            letter = "No Letters";
    }
    console.log("Letter: " + letter);
    return letter;
}
getLetter("catchy");
