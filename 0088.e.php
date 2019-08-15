class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $count = count($nums1);

        for($i=$n; $i>0; --$i){
            $nums1[($count)-$i] = $nums2[$i-1];
        }
        //sort($nums1);

        return $nums1;
    }
}
