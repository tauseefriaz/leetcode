class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) {
        $str = "1";

        if($n==1){
            return "1";
        }

        for ($i=1; $i<$n; $i++) {

            $strlen = strlen($str);
            $substr = "";
            for ($j=0; $j<$strlen; $j++) {
                if($str[$j+1] == $str[$j]){
                    ++$a[$str[$j]];
                }else{
                    $substr  .= ++$a[$str[$j]].$str[$j];
                    unset($a);
                }
            }
            $str = $substr;
        }

        return $str;
    }
}
