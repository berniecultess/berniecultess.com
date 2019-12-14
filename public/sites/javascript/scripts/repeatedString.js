/* Lilah has a string, s, of lowercase English letters that she repeated infinitely many times.
Given an integer, n, find and print the number of letter a's in the first  letters of Lilah's infinite string.
For example, if the string s = 'abcac' and n = 10, the substring we consider is abcacabcac, the first 10 characters of her 
infinite string.There are 4 occurrences of a in the substring.

Function Description
Complete the repeatedString function in the editor below.It should return an integer representing the number of occurrences 
of a in the prefix of length n in the infinitely repeating string.
repeatedString has the following parameter(s):
• s: a string to repeat
• n: the number of characters to consider

Input Format
The first line contains a single string, s.
The second line contains an integer, n.

Constraints
• 1 ≤ |s| ≤ 100
• 1 ≤ n ≤ 10e12
• For 25% of the test cases, n ≤ 10e6 .

Output Format
Print a single integer denoting the number of letter a's in the first  letters of the infinite string created by repeating  infinitely many times.

Example 1
S = "aba"
N = 10

Example 2
S = "a"
N = 1000000000000

*/

function repeatedString(s, n) {
    const min = 1;
    const maxs = 100;
    const maxn = 1000000000000;

    console.log(s.split('').filter(i => i === "a"));
    let as = s.split('').filter(i => i === "a").length;
    console.log(as);

    if (typeof s === "string"
        && s.length >= min
        && s.length <= maxs
        && n === parseInt(n, 0)
        && n >= min
        && n <= maxn) {

        console.log("parseInt(n / s.length, 0): " + parseInt(n / s.length, 0), "as: " + as, "(s.slice(0, (n % s.length)).split('').filter(i => i === \"a\").length): " + (s.slice(0, (n % s.length)).split('')
            .filter(i => i === "a").length));
        as = (parseInt(n / s.length, 0) * as)
            + (s.slice(0, (n % s.length)).split('')
                .filter(i => i === "a").length);
    }
    // console.log(as);
    return results.innerHTML = as;
}

repeatedString("abcac", 10);