<?php

// 13. Roman to Integer
// Problem Link : https://leetcode.com/problems/roman-to-integer/

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $sum = 0;
        $map_index = [
            "M" => 1000,
            "D" => 500,
            "C" => 100,
            "L" => 50,
            "X" => 10,
            "V" => 5,
            "I" => 1
        ];
        
        for ( $i = 0; $i < strlen($s); $i++ ) {
            if ( $i === strlen($s) - 1 ) {
                $sum += $map_index[$s[$i]]; 
            } else {
                $sum += ($map_index[$s[$i]] >= $map_index[$s[$i+1]]) ? $map_index[$s[$i]] : - $map_index[$s[$i]] ;
            }
        }
        return $sum;
    }
}