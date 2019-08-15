class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $hLen = strlen($haystack);
        $nLen = strlen($needle);


        for( $h=0; $h<$hLen; $h++ ){
           if( $haystack[$h] == $needle[0] ){
               $str = substr($haystack,$h, $nLen);
               if($str==$needle){
                   return $h;
               }
           }
        }

        if($nLen==0) return 0;
        else return -1;

    }
}
