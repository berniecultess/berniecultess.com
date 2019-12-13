"use strict";
function reverseString(s) {
    let string, message;
    try {
        console.log("string: ", s.split(), "type of: ", typeof s.split());
        string = s
            .split("")
            .reverse()
            .join("");
        // console.log(string);
        // return string;
    } catch (e) {
        message = e.message;
    } finally {
        if (typeof string === "string") {
            console.log(string);
        } else {
            console.log(message + " \n" + s);
        }
    }
}
reverseString(1234);
