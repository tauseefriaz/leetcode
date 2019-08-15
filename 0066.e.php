class Solution {


    function plusOne($digits) {

        $count = count($digits);
        $digits[$count-1]++;

        if($digits[$count-1]>9){
            $digits[$count-1] =  $digits[$count-1]%10;
            $carry = 1;
            for($i = $count-2; $i >= 0; $i--){
                $digits[$i] += $carry;
                $carry = 0;
                if($digits[$i]>9){
                    $carry = floor($digits[$i]/10);
                    $digits[$i] =  $digits[$i]%10;
                }
            }
        }

        if($carry){
            array_unshift($digits, $carry);
        }

        return $digits;

    }
}
