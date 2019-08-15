class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $len = strlen($s);

        $str = [];
        for($i = 0; $i<$len; $i++){
            $str[$s[$i]]++;
        }

        $pos = strpos($s, array_search(1, $str));
        if($pos !== false){
            return $pos;
        }else {
            return -1;
        }
    }
}
