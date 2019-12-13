/*
Emma is playing a new mobile game that starts with consecutively numbered clouds. Some of the clouds are thunderheads and 
others are cumulus. She can jump on any cumulus cloud having a number that is equal to the number of the current cloud plus  
1 or 2. She must avoid the thunderheads. Determine the minimum number of jumps it will take Emma to jump from her 
starting postion to the last cloud. It is always possible to win the game.
For each game, Emma will get an array of clouds numbered 0 if they are safe or 1 if they must be avoided. For example,  
c = [0,1,0,0,0,1,0] indexed from 0...6. The number on each cloud is its index in the list so she must avoid the clouds at 
indexes 1 and 5. She could follow the following two paths:  0 -> 2 -> 4 -> 6 or 0 -> 2 -> 3 -> 4 -> 6. The first path takes 3
jumps while the second takes 4.

Function Description
Complete the jumpingOnClouds function in the editor below. It should return the minimum number of jumps required, as an integer.
jumpingOnClouds has the following parameter(s):
• c: an array of binary integers

Input Format
The first line contains an integer , the total number of clouds. The second line contains n space-separated binary integers 
describing clouds c[i] where 0 <= i < n.

Constraints
• 2 ≤ n ≤ 100
• c[i] {0,1}
• c[0] = c[n-1] = 0

Output Format
Print the minimum number of jumps needed to win the game.

Example 1
n = 7
c = [0,0,1,0,0,1,0]

Example 2
n = 6
c = [0,0,0,0,1,0]
*/
function lookForPaths(c, paths) {
    if (c.length > 1) {
        let paths1 = paths.slice();
        let paths2 = paths.slice();

        paths1 = (c[1] !== 1) ? [...paths1, 1] : 0;
        paths2 = (c[2] !== 1) ? [...paths2, 2] : 0;

        if (paths1 === 0 && paths2 === 0) {
            paths = 0;
        } else if (paths1 !== 0 && paths2 === 0) {
            return lookForPaths(c.slice(1), paths1);
        } else if (paths1 === 0 && paths2 !== 0) {
            return lookForPaths(c.slice(2), paths2);
        } else if (paths1 !== 0 && paths2 !== 0) {
            paths1 = lookForPaths(c.slice(1), paths1);
            paths2 = lookForPaths(c.slice(2), paths2);
            return (paths1.length < paths2.length) ? paths1 : paths2;
        }
    }
    return paths;
}

// Complete the jumpingOnClouds function below.
function jumpingOnClouds(c) {
    const min = 0;
    const max = 100;
    let jumps = 0;

    if (c.length >= min && c.length <= max) {
        jumps = lookForPaths(c, []);
    }

    console.log(((typeof jumps === "number") ? jumps : jumps.length));
}

// N = 5, C = [0, 1, 0, 0, 0], Expected 2
// N = 5, C = [1, 1, 1, 0, 0], Expected 0
// N = 0, C = [], Expected 0
// N = 101, C = [1, 0, 1, 0, 0, 1, 0, 1 ... ], Expected 0
// N = 7, C = [0, 0, 1, 0, 0, 1, 0], Expected 4
// N = 6, C = [0, 0, 0, 1, 0, 0], Expected 3

jumpingOnClouds([0, 0, 0, 1, 0, 0]);