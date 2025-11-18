<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_DEFAULT);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_DEFAULT);
    $brand = filter_input(INPUT_POST, 'brand', FILTER_DEFAULT);
    $model = filter_input(INPUT_POST, 'model', FILTER_DEFAULT);
    $options = filter_input(INPUT_POST, 'options', FILTER_DEFAULT);
    $insurance = filter_input(INPUT_POST, 'insurance', FILTER_DEFAULT);

    $errors = [];


    if (!$firstname) {
        $errors[] = "Please provide all necessary information";
    }
    if (!$lastname) {
        $errors[] = "Please provide all necessary information";
    }
    if (!$brand) {
        $errors[] = "Please provide all necessary information";
    }
    if (!$model) {
        $errors[] = "Please provide all necessary information";
    }
    if (!$insurance) {
        $errors[] = "Please provide all necessary information";
    }

    if (str_word_count($options) < 5) {
        $errors[] = "The options field must contain at least 5 words";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024px, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles/contact.css">
    <title>Bing Cars</title>
</head>
<body>
    <div class="content">
        <header>
            <img src="static/images/logo.png" alt="companys logo">
            <div class="header-nav">
            <?php
                    $menuTexts = array("Home", "Most hired cars", "Contact");
                    $menuLinks = array('index.php', '#', 'contact.php');

                    for ($i=0; $i < count($menuTexts); $i++) { 
                        echo "<a href='".$menuLinks[$i]."'>".$menuTexts[$i]."</a>";
                    }
                ?>
            </div>
        </header>

        <div class="banner">
            <h1>Bing's Cars</h1>
            <h2>For all your special cars</h2>
        </div>

        <div class="cars-content">
            <div class="title">
                <?php
                    if (empty($errors)) {
                        echo "<h1>Thank you</h1>";
                    }
                    else {
                        echo "<h1>Request a car</h1>";
                    }
                ?>
                <div class="title-line"></div>
            </div>
        
XX˛
            <div class="result">
                <?php
                    if (!empty($errors)){
                        echo "<h2>".$errors[0]."</h2>";
                    }
                    else {
                        echo "<h3> Firstname: ".$firstname."</h3>";
                        echo "<h3> Lastname: ".$lastname."</h3>";
                        echo "<h3> Car brand & model: ".$brand. " ".$model."</h3>";
                        echo "<h3> Options: ".strtoupper($options)."</h3>";
                        echo "<h3> Do you want insurance? ".$insurance."</h3>";
                    }
                    
                ?>
            </div>
            



            
        </div>
        <footer>
            <div class="contact">
                <h5>© 2022 Bing Cars</h5>
                <a href="#">Send us direct email!</a>
            </div>

            <div class="working-hours">
                <h5>Monday 13:00 - 18:00</h5>
                <h5>Tuesday 9:00 - 18:00</h5>
                <h5>Wednesday 9:00 - 18:00</h5>
                <h5>Thursday 9:00 - 18:00</h5>
                <h5>Friday 9:00 - 18:00</h5>
                <h5>Saturday 9:00 - 18:00</h5>
            </div>
        </footer>
    </div>
</body>