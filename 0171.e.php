class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function titleToNumber($s) {
        $s = str_split($s);

        $col = 0;
        $m = 1;

        foreach(array_reverse($s) as $key => $c){
            $col += (ord($c)-64) * $m;
            $m = 26 * $m;
        }

        return $col;
    }
}
