"use strict";

function getSecondLargest(nums) {
    let n = 0,
        numSorted,
        numSorted2,
        max;

    console.log("nums : ", nums, typeof nums, "nums length: ", nums.length);

    numSorted = nums.sort((a, b) => a - b);
    numSorted2 = nums.slice(0).sort((a, b) => a - b);
    console.log("nums Sorted: ", numSorted, "nums Sorted 2: ", numSorted2);

    max = Math.max(...numSorted);
    console.log("nums max: ", max);

    for (let i = numSorted.length - 1; i >= 0; i--) {
        // console.log(i, ": ", numSorted[i], "-- ", i - 1, ": ", nums[i - 1]);
        if (numSorted[i] < max) {
            n = numSorted[i];
            break;
        }
    }

    console.log("Number: ", n);
    return n;
}
getSecondLargest([2, 3, 6, 6, 5]);
