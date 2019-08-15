class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findPairs($nums, $k) {
        if($k<0) return 0;


        foreach($nums as $k1 => $v1){
            foreach($nums as $k2 => $v2){
                if($k1==$k2 || isset($a[$v2.$v1])) continue;
                if($v1-$v2==$k){
                    $a[$v2.$v1] = true;
                    unset($nums[$k2]);
                }
            }
        }
        return count($a);
        print_r(count($a));
    }
}
