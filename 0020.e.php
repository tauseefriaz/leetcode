class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $pare = [
            "]" => "[",
            "}" => "{",
            ")" => "("
        ];

        $stack = array();

        $strl = strlen($s);

        for($i=0; $i<$strl; $i++){
            if($pare[$s[$i]]){
                if( $pare[$s[$i]]==end($stack) ){
                    array_pop($stack);
                }else{
                    return false;
                }
            }else{
                array_push($stack, $s[$i]);
            }
        }

        return empty($stack);
    }
}
