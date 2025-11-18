<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Van Winteren";
        $age = 33;
        $yearsCollecting = 4;

        $cars = 33;
        $horses = 37;
        $instruments = 29;

        $rareInstrument = "guitar";
        $rareInstrumentAge = 132;

        $favHorse = "Bensley";
        $favHorseAge = 8;

        echo "Mr. <i>$name</i>, <b>$age</b> years old, has been collecting special objects for the past <b>$yearsCollecting</b> years.<br>";
        echo "<i>$name</i> currently has <b>$cars</b> <u>cars</u>, <b>$horses</b> <u>horses</u> and <b>$instruments</b> rare <u>musical instruments</u>.<br>";
        echo "The rarest instrument in <i>$name</i>'s possession is a <b>$rareInstrumentAge</b>-year-old <u>$rareInstrument</u>.<br>";
        echo "His favorite horse is <i>$favHorse</i>, the <b>$favHorseAge</b>-year-old stallion.";
    ?>

</body>
</html>