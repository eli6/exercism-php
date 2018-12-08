<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    //
    // YOUR CODE GOES HERE
    //
    if(strlen($a) != strlen($b)){
        throw new InvalidArgumentException("DNA strands must be of equal length.");
    } else {
        if (strtolower($a) === strtolower($b)) {
            //strings are identical
            return 0;
        } else {
            //calculate difference between strands
            $difference = 0;

            //loop through string $a
            for ($i = 0; $i < strlen($a); $i++) {
                if ($a[$i] != $b[$i]) {
                    //add 1 to $difference if they differ in that position
                    $difference += 1;
                }
            }

            //return the sum of differences = distance between DNA strands.
            return $difference;
        }
    }
}
