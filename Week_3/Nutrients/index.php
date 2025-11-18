<?php
    function nutrients($Calories, $Carbs, $Protein, $Fat, $Diet ) {
        if ($Diet) {
            $DietStatus = "approved";
        }
        else {
            $DietStatus = "disapproved";
        }

        $html = <<<HTML
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="style.css">
                <title>Document</title>
            </head>
            <body>
                <table>
                    <tr>
                        <td>Calories</td>
                        <td>{$Calories}</td>
                    </tr>
                    <tr>
                        <td>Carbs</td>
                        <td>{$Carbs}</td>
                    </tr>
                    <tr>
                        <td>Protein</td>
                        <td>{$Protein}</td>
                    </tr>
                    <tr>
                        <td>Fat</td>
                        <td>{$Fat}</td>
                    </tr>
                    <tr>
                        <td>Diet</td>
                        <td>{$DietStatus}</td>
                    </tr>
                </table>
            </body>
            </html>
        HTML;

        return $html;
    }

    echo nutrients(42 ,42,42,42,42);
?>