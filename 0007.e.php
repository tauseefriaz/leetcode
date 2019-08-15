class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $neg = $x < 0 ? -1:1;
        $x = str_split($x);

        for($i=count($x); $i>=0; $i--){
            $rev .= $x[$i];
        }

        if($rev>2147483647 || $rev<-2147483647){
            return 0;
        }

        return $rev * $neg;
    }
}
