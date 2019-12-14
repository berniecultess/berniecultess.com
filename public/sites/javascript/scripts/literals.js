"use strict";

function sides(...expressions) {
    const [a, p] = expressions;

    const A = a * p;
    const P = 2 * (a + p);

    let powr = Math.pow(P, 2);
    let root = Math.sqrt(powr - 16 * A);

    let s1 = (P + root) / 4;

    let s2 = (P - root) / 4;

    console.log(
        "Expressions: ",
        expressions,
        "; Pow: ",
        powr,
        "; sq root: ",
        root,
        "; s1: ",
        s1,
        "; s2: ",
        s2
    );

    // return [s1, s2];
}

sides(10, 14);
