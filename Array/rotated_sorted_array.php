<?php

// 33. Search in Rotated Sorted Array
// Problem Link : https://leetcode.com/problems/search-in-rotated-sorted-array/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $index = -1;
        
        for( $i = 0; $i< count( $nums ) ; $i++ ) {
            if( $target == $nums[ $i ] ) {
                $index = $i;
                break;
            }
        }
        
        return $index;   
    }
}