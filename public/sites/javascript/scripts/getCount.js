"use strict";
function getCount(a) {
    console.log("a object: ", a, "typeof a: ", typeof a);
    let i = 0;

    for (var n in a) {
        console.log(a[n].x);
        if (a[n].x === a[n].y) {
            i++;
        }
    }
    console.log("i: ", i);
    return i;
}
getCount([
    [1, 1],
    [2, 3],
    [3, 3],
    [3, 4],
    [4, 5]
]);
