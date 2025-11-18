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
        $left = 47;
        $right = 66;

        $left = $left + $right;
        $right = $left - $right;
        $left = $left - $right;
        
        echo "left: $left<br>";
        echo "right: $right<br>";
    ?>
</body>
</html>