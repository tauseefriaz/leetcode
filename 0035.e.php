class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {

        foreach($nums as $i => $num){

            if($target === $nums[$i]){
                return $i;
            }elseif(($target < $nums[$i] || !isset($nums[$i+1])) && $target > $nums[$i]){
                return ++$i;
            }elseif($target < $nums[$i]){
                return $i;
            }
        }
    }
}
