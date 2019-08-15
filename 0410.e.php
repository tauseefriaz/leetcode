class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        $count = count($nums);
        for($i=0; $i<$count; $i++){
            $a[$nums[$i]]++;
        }
        $min = min($a);
        print_r($a);
        for(end($a); key($a)!==null; prev($a)){
            if(current($a)==$min) return key($a);
        }

    }
}
