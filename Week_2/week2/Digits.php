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
        $digit = 2;

        switch ($digit) {
            case 1:
            case 2:
            case 3:
                $export = "Very bad";
                break;
            case 4:
            case 5:
                $export = "Insufficient";
                break;
            case 6:
            case 7:
                $export = "Sufficient";
                break;
            case 8:
                $export = "Good";
                break;
            case 9:
                $export = "Very good";
                break;
            case 10:
                $export = "Excellent";
                break;
            default:
                $export = "Invalid figure";
        }

        echo "<p>Digit: <b>$digit</b><br>Export: <b>$export</b></p>";
        ?>
    </body>
</html>