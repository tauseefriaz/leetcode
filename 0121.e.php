class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $profit = 0;
        foreach($prices as $key => $price){
            if($price<$min || !isset($min)){
                $min = $price;
            }elseif($price - $min > $profit){
                $profit = $price - $min;
            }
        }
        return $profit;
    }
}
