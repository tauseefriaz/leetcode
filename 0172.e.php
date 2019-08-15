class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function trailingZeroes($n) {
        $zeros = 0;

        while($n>0){
            $n = floor($n / 5);
            $zeros += $n;
        }

        return $zeros;
    }
}
