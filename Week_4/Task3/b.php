<?php
    function assigment4($rows) {
        $output = "";
        for ($i=1; $i < $rows; $i++) { 
            $output = $output.str_repeat("&nbsp;", $rows - $i);
            $output = $output.str_repeat("*", $i)."<br>";
        }
        $html = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <div style="border: 1px solid black; width: fit-content;">'. $output .'</div>
            </body>
            </html>
        ';
        echo $html;
    }

    function assigment3($rows) {
        $output = "";
        for ($i=$rows; $i!=0; $i--) { 
            $output = $output.str_repeat("&nbsp;", $rows - $i);
            $output = $output.str_repeat("*", $i)."<br>";
        }
        $html = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <div style="border: 1px solid black; width: fit-content;">'. $output .'</div>
            </body>
            </html>
        ';
        echo $html;
    }
    

    assigment1(10);
?>