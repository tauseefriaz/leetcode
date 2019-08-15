class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $a = [];
        foreach($nums as $num){
            if(isset($a[$num])) return true;
            $a[$num] = true;
        }
        return false;
    }
}
