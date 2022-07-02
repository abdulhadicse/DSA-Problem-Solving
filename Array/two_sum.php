<?php

// 1. Two Sum
// Problem Link : https://leetcode.com/problems/two-sum/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map_index = [];
        
        for ( $i = 0; $i < count( $nums ); $i++ ) {
            $search_number = $target - $nums[$i];
            
            if ( array_key_exists( $search_number, $map_index ) ) {
                return [ $map_index[$search_number], $i ];
            } else {
                $map_index[ $nums[$i] ] = $i;
            }
        }
    }
}