class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        foreach($nums2 as $num){
            $nums1[] = $num;
        }
        sort($nums1);
        $total = count($nums1);
        $half = $total/2;
        if( $total%2 == 0 ){
            return ($nums1[$half-1] + $nums1[$half] ) / 2;
        }else {
            return $nums1[$half];
        }

    }
}
