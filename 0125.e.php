class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = strtolower(preg_replace("/[^a-zA-Z0-9]/ ", "", $s));
        $len = strlen($s);

        for($i = 0; $i<($len/2); $i++){
            if($s[$i]!=$s[($len-1)-$i]){
                return false;
            }
        }

        return true;
    }
}
