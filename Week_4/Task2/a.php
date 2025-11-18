<?php
    $areacodes = [14, 26, 12, 58, 34, 66, 7, 41];
    function highest_num($list) {
        sort($list, 1);
        $list = array_reverse($list);
        return $list[0];
    }
    echo highest_num($areacodes);
?>