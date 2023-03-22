<?php
function isPrime($number) {
    if($number == 2) {
        return true;
    }

    if($number % 2 == 0) {
        return false;
    }

    $sqrt = sqrt($number);
    for($i = 3; $i <= $sqrt; $i += 2) {
        if($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function displayPrimes($maxNumber) {
    $primes = array();
    for($i = 2; $i <= $maxNumber; $i++) {
        if(isPrime($i)) {
            array_push($primes, $i);
        }
    }

    echo "Deret bilangan prima yang kurang dari atau sama dengan $maxNumber:\n";
    echo implode(", ", $primes);
}

$maxNumber = readline("Masukkan angka: ");
displayPrimes($maxNumber);
?>
