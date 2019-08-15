class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        foreach($nums1 as $key1 => $val1){
            $a = true;
            foreach($nums2 as $key2 => $val2){
                if($val1==$val2){
                    unset($nums2[$key2]);
                    $a = false;
                    break;
                }
            }
            if($a) unset($nums1[$key1]);
        }

        return $nums1;
    }
}
