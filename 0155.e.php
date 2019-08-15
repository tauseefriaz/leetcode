class MinStack {

    public static $stack;

    function __construct() {
        self::$stack = array();
    }

    function push($x) {
        self::$stack[] = $x;
    }

    function pop() {

        unset(self::$stack[count(self::$stack)-1]);
        self::$stack = array_values(self::$stack);

    }

    function top() {
        return self::$stack[count(self::$stack)-1];
    }

    function getMin() {
        foreach(self::$stack as $key => $val){
            if($val<$min || !isset($min)){
                $min = $val;
            }
        }
        return $min;
    }
}
