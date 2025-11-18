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
        function equal($num) {
            switch (true) {
                case ($num > 100):
                    return "more then 100";
                    break;
                
                case ($num < 100):
                    return "less then 100";
                    break;
                
                case ($num == 100):
                    return "equals 100";
                    break;

                default:
                    return "No match found";
                    break;
            }

        }

        echo equal(1000);
    ?>
</body>
</html>