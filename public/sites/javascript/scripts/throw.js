"use strict";
function isPositive(a) {
    // if integer is positive output "YES"
    // a === 0, message = "zero error"
    // a === -#, message = "negative error"
    // let string, message;
    if (typeof a !== "number") {
        return false;
    }

    if (a === 0) {
        console.log("Zero Error");
        throw Error("Zero Error");
    } else if (a < 0) {
        console.log("Negative Error");
        throw Error("Negative Error");
    } else {
        console.log("YES");
        return "YES";
    }

    // try {

    //     if (a > 0) throw "YES";
    //     if (a === 0) throw "Zero Error";
    //     if (a < 0) throw "Negative Error";
    // } catch (e) {
    //     console.log(e);
    // }
}
isPositive(0);
