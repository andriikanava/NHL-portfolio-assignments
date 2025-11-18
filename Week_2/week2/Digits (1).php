<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digits</title>
</head>

    <body>
        <?php

        // Change value for testing
        $digit = 7;

        if ($digit < 1) {
            $export = "Invalid figure";
        } elseif ($digit <= 3) {
            $export = "Very bad";
        } elseif ($digit <= 5) {
            $export = "Insufficient";
        } elseif ($digit <= 7) {
            $export = "Sufficient";
        } elseif ($digit == 8) {
            $export = "Good";
        } elseif ($digit == 9) {
            $export = "Very good";
        } elseif ($digit == 10) {
            $export = "Excellent";
        } else {
            $export = "Invalid figure";
        }

        echo "<p>Digit: <b>$digit</b><br>Export: <b>$export</b></p>";
        ?>
    </body>
</html>