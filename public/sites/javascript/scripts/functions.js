function factorial(n) {
    return (n > 1) ? n * factorial(n - 1) : 1;
}

factorial(4);
// 4 x 3 x 2 x 1 = 120