<?php
    $areacodes = [14, 26, 12, 58, 34, 66, 7, 41];
    function highest_num($list, $number) {
        for ($i=0; $i < sizeof($list); $i++) { 
            if ($number == $list[$i]) {
                return "True";
            }
        }
        return "False";
    }
    echo highest_num($areacodes, 7124);
?>