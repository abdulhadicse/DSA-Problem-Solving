<?php

// 9. Palindrome Number
// Problem Link : https://leetcode.com/problems/palindrome-number/

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $sum = 0;
        $num = $x;
        
        if ( $x < 0 ) {
        	return false;
        }
        
        while ( $num != 0 ) {
        	$rem = $num % 10;  
			$sum = $sum * 10 + $rem; 
			$num = (int) ($num / 10);
        }
 
        if ( $sum == $x ) {	return true; } else { return false; }
    }
}