<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function containsDuplicate($nums)
    {
        $hashset = [];
        foreach ($nums as $num){
            if (in_array($num, $hashset))
                return true;
            $hashset[] = $num;
        }
    }
}