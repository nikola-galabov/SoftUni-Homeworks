function isPrime(value) {
    var maxDiv = Math.sqrt(value);
    var div = 2;
    var prime = true;
    while (prime&&div<maxDiv) {
        if (value%div==0) {
            prime = false;
        }
        div++;
    }
    console.log(prime);
}

isPrime(7);
isPrime(254);
isPrime(587);