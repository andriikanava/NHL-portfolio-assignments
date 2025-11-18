<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
    <body>
        <?php
        $date = 14062016;

        $day = (int)($date / 1000000); // first 2 digits
        $month = (int)(($date % 1000000) / 10000); // next 2 digits
        $year = $date % 10000; // last 4 digits

        echo "<p>
            The date is written as: <b>$date</b><br>
            Day: <b>$day</b><br>
            Month: <b>$month</b><br>
            Year: <b>$year</b>
        </p>";
        
        ?>
    </body>
</html>