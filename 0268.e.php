class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $a = 0;
        for($i = 0; $i<= count($nums); $i++){
            $a =  $a ^ $nums[$i] ^ $i ;
        }
        return $a;
    }
}
