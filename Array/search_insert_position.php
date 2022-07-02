<?php

// 35. Search Insert Position
// Problem Link : https://leetcode.com/problems/search-insert-position/

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $flag  = 0;
        $index = -1;
        
        for( $i = 0; $i< count( $nums ) ; $i++ ) {
            if( $target < $nums[ $i ]  &&  0 == $flag ) {
                $index = $i;
                $flag = 1;
            }
            if( $target == $nums[ $i ] ) {
                $index = $i;
                break;
            }
        }
        
        if( $index < 0 ) {
            $index = count( $nums );
        }

        return $index;
    }
}