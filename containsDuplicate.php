<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function containsDuplicate($nums)
    {
        //check constraints

        //check for duplicates

        //return answer
    }

    private function checkConstraints(array $nums){
        $constraint1 = 1 <= sizeof($nums);
        $constraint1Part2 = sizeof($nums) <= pow(10,5);
        $constraint2 = pow(-10,9) <= $nums[1];
        $constraint2Part2 = $nums[1] <= pow(10,9);

        return ($constraint1 && $constraint1Part2) && ($constraint2 && $constraint2Part2);
    }
}

$solution = new Solution();
$solution->containsDuplicate(5);