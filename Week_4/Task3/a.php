<?php
    function line($columns) {
        $output = "";
        for ($i=0; $i < $columns; $i++) {
            $output = $output."*";
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

    function block($columns, $rows) {
        $output = "";
        for ($i=0; $i < $rows; $i++) { 
            for ($a=0; $a < $columns; $a++) { 
                $output = $output."*";
            }
            $output = $output."<br>";
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

    function triangle($rows) {
        $output = "";
        for ($i=1; $i < $rows; $i++) { 
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

    function triangle_reversed($rows) {
        $output = "";
        for ($i=$rows; $i != 0; $i--) { 
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

    triangle(10);
?>

