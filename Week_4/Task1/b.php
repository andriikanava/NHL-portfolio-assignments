<?php
    $colorwheel = ["green", "green", "blue", "blue", "red", "yellow", "pink"];

    function outputColor() {
        global $colorwheel;
        echo $colorwheel[random_int(0, 4)];
    }

    outputColor();
?>