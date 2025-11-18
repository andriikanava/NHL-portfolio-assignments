<?php
    function main($age, $sex, $visited) {
        switch (true) {
            case $age<18 && $sex=="F" && $visited==True:
                echo '<h1 class="warning">WARNING!</h1>';
                break;
            
            case $age<18:
                echo '<h2>not old enough to register</h2>';
            
            case $sex=="F": 
                echo "<h2>upcoming ladies night</h2>";
            case $visited:
                echo "<h2>discount will be applied during checkout</h2>";
        }
    }
    main(17,"F",True)
?>