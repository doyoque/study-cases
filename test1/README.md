# Find The Corresponding Close Round Bracket

In this project create a function that takes two arguments, a string and an integer. <br/>
The first argument is the given string that need to be validate. Example `"a (b c (d e (f) g) h) i (j k)"`. <br/>
The second argument is the index position of an open parenthesis "(". Be sure to know that the index of array always begin with zero `(0)`. <br/>
<br/>
The function should return an integer that indicates the index position of the correct corresponding close parent ")" inside the string taking into account nested 
parenthesized values.

## Example Case

If the function receives "a (b c (d e (f) g) h) i (j k)" and 2 as arguments. <br/>
`nameYourFunction("a (b c (d e (f) g) h) i (j k)", 2);` // 2 here indicates the "(" right before "b"<br/>
The function should return the index position of the ")" right after "h", in this case, the return value is 20.

## Prerequisites

Make sure to run `composer install` for running the test suites. To run the test simply execute `./vendor/bin/phpunit`.