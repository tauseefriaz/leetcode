class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $roman = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        ];

        $result = 0;
        $s = str_split($s);
        foreach($s as $key => $char){
            if($roman[$char] < $roman[$s[$key+1]] ){
                $result -= $roman[$char];
            }else {
                $result += $roman[$char];
            }

        }

        return $result;
    }
}
