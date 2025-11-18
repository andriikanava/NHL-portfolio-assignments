<?php
    $colorwheel = ["green", "blue", "red", "yellow", "pink"];

    function outputColor() {
        global $colorwheel;
        echo $colorwheel[random_int(0, 4)];
    }

    outputColor();
?>