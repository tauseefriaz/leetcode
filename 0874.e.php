class Solution {

    /**
     * @param Integer[] $commands
     * @param Integer[][] $obstacles
     * @return Integer
     */
    function robotSim($commands, $obstacles) {
        $axis = "y";
        $index = ["y"=>0, "-y"=>0, "-x"=>0, "x"=>0];

        foreach($commands as $key => $command){
            if(!in_array($command, [-1, -2])){


                foreach($obstacles as $obstacle){
                    if(str_replace("-", "", $axis)=="y"){
                        if($command>$obstacle[1] && $index[$axis]>$obstacle[1]){
                            $command = $obstacle[1] - $index[$axis]-1;
                        }
                    }elseif(str_replace("-", "", $axis)=="x" && $index[$axis]>$obstacle[0]){
                        if($command>$obstacle[0]){
                            $command = $obstacle[0] - $index[$axis]-1;
                        }
                    }
                }

                $index[$axis] += $command;
            }else{
                if($command == -1){
                    if($axis=="y") $axis = "x";
                    elseif($axis=="r") $axis = "-y";
                    elseif($axis=="-y") $axis = "-x";
                    elseif($axis=="-x") $axis = "y";
                }

                if($command == -2){
                    if($axis=="y") $axis = "-x";
                    elseif($axis=="-x") $axis = "-y";
                    elseif($axis=="-y") $axis = "x";
                    elseif($axis=="x") $axis = "y";
                }
            }
        }
        print_r($index);
        foreach($index as $a => $v){
            $sum += $v*$v;
        }
        return $sum;
    }
}
