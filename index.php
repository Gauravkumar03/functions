<?php 

//Program to print factorial of a number
function fact($n) {
    if($n == 1) {
        return 1;
    }
    else {
        return $n * fact($n - 1);
    }
}
echo fact(5).'<br>';

//Program to check whether a number is prime or not
function isPrime($n) {
    if($n == 1) {
        return 'The number is not prime';
    }
    if($n == 2) {
        return 'The number is prime';
    }
    $flag = false;
    for($i = 2; $i < $n; $i++) {
        if($n % $i == 0) {
            $flag = true;
            continue;
        }
    }
    if($flag) {
        return 'The number is not prime';
    }
    else {
        return 'The number is prime';
    }
}
echo isPrime(4).'<br>';

//function to reverse a string
function reverseString($str) {
    $arr = str_split($str);
    for($i = count($arr) - 1; $i >= 0; $i--) {
        echo $arr[$i];
    }
    
}
echo reverseString('hijkl').'<br>';

//funciton to sort an array
function sortArray($arr) {
    sort($arr);
    echo var_dump($arr).'<br>';
}
echo sortArray(array(3, 4, 1, 6, 2)).'<br>';


//function to check whether a string is all lowercase.
function isLower($str) {
    if(preg_match('/[A-Z]/', $str)){
        echo " There is at least  one Upper Case Characters inside the string ";
        }else{
        echo " There is no Upper case characters inside the string ";
        }
}
echo isLower('Hello');

?>