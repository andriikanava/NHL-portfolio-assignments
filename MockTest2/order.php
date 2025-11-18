<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cheese = filter_input(INPUT_POST, "cheese", FILTER_DEFAULT);
        $pineapple = filter_input(INPUT_POST, "pineapple", FILTER_DEFAULT);

        $mushrooms = filter_input(INPUT_POST, "mushrooms", FILTER_DEFAULT);
        $pepper = filter_input(INPUT_POST, "pepper", FILTER_DEFAULT);
        $shoarma = filter_input(INPUT_POST, "shoarma", FILTER_DEFAULT);
        $veggie = filter_input(INPUT_POST, "veggie", FILTER_DEFAULT);

        $type = filter_input(INPUT_POST, "type", FILTER_DEFAULT);

        $message = filter_input(INPUT_POST, "msg", FILTER_DEFAULT);

        $news = filter_input(INPUT_POST, "news", FILTER_DEFAULT);


        $errors = [];

        if (empty($cheese)) {
            $errors[] = "Choose cheese";
        }
        if (empty($pineapple)) {
            $errors[] = "Choose pineapple";
        }
        if (empty($news)) {
            $errors[] = "Choose news";
        }
        if (str_word_count($message) < 5) {
            $errors[] = "Enter at least 5 words";
        }

        if (empty($errors)) {
            $total = 4.99;

            switch ($cheese) {
                case 'No cheese €0,00':
                    break;
                case 'Normal cheese €1,00':
                    $total = $total+1.0;
                case 'Extra cheese €2,00':
                    $total = $total+2.0;
            }

            switch ($pineapple) {
                case 'No pineapple €2,00':
                    $total = $total+2.0;
                case 'Double pineapple €1,00':
                    $total = $total+1.0;
            }
            
            $extra = [];

            if (!empty($mushrooms)) {
                $total = $total + 1.0;
                $extra[] = "Mushrooms € 1,00";
            }
            if (!empty($pepper)) {
                $total = $total + 1.5;
                $extra[] = "Pepper € 1,50";
            }
            if (!empty($shoarma)) {
                $total = $total + 2.99;
                $extra[] = "Shoarma € 2,99";
            }
            if (!empty($veggie)) {
                $total = $total + 2.99;
                $extra[] = "Veggie shoarma € 2,99";
            }

            $thanks = true;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles/order.css">
    <title>Document</title>
</head>
<body>
    <div class="main-grid">
        <div class="content">

            <div class="banner">
                <img src="static/img/logo.png" alt="Logo">
            </div>

            <header>
                <nav class='navbar'>
                    <?php
                        $navigation = array("Vip-Card", "Pizza points", "Customer support", "Locations");
                        $navigationLink = array("index.php", "#", "#", "#");

                        for ($i=0; $i < count($navigation); $i++) { 
                            echo '<a href="'.$navigationLink[$i].'">'.$navigation[$i].'</a>';
                        }
                    ?>
                 </nav>
            </header>

            <div class="search-banner">
                <input type="text" value="What are you looking for?" id="search">
            </div>
            <?php
                if (!empty($errors)) {
                    $html = <<<HTML
                        <h4 class="error-msg">$errors[0]</h4>
                    HTML;
                    echo $html;
                }
            ?>
            <div class="divider">
                <?php
                    if (isset($thanks)) {
                        echo "<h1>Pizza - &euro; ".$total."!</h1>";
                    }
                    else {
                        echo '<h1>Pick your dough for "Pizza - &euro; 4,99"!</h1>';
                    }
                ?>
                <div class="divider-line"></div>
            </div>


            <?php 
                if (isset($thanks)){
                    echo '<h1 class="thanks-msg">Thanks for the dough!</h1>';
                    $extras = implode(", ", $extra);
                    $sum = <<<HTML
                        <div class="sum">
                            <h4><b>Cheese: </b>$cheese</h4>
                            <h4><b>Pineaple: </b>$pineapple</h4>
                            <h4><b>Extra: </b>$extras</h4>
                            <h4><b>Pizza type: </b>$type</h4>
                            <h4><b>Additional message: </b>$message</h4>
                            <h4><b>Total: </b>$total</h4>
                            <h4><b>News: </b>$news</h4>
                        </div>
                    HTML;
                    echo $sum;
                }
                else {
                    $form = <<<HTML
                        <form class="order-form" action="order.php" method="post">
                
                            <div class="cheese">
                                <h4>CHEESE</h3>
                                <div class="option">
                                    <input type="radio" id="no" name="cheese" value="No cheese &euro;0,00" checked>
                                    <label for="no">No cheese &euro;0,00</label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="normal" name="cheese" value="Normal cheese &euro;1,00">
                                    <label for="normal">Normal cheese &euro;1,00</label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="extra" name="cheese" value="Extra cheese &euro;2,00">
                                    <label for="extra">Extra cheese &euro;2,00</label>
                                </div>
                            </div>

                            <div class="pineapple">
                                <h4>PINEAPPLE</h3>
                                <div class="option">
                                    <input type="radio" id="no-pineapple" name="pineapple" value="No pineapple &euro;2,00" checked>
                                    <label for="no-pineapple">No pineapple &euro;2,00</label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="db-pineapple" name="pineapple" value="Double pineapple &euro;1,00">
                                    <label for="db-pineapple">Double pineapple &euro;1,00</label>
                                </div>
                                <div class="option">
                                    <input type="radio" id="tr-pineapple" name="pineapple" value="Triple pineapple &euro;0,00">
                                    <label for="tr-pineapple">Triple pineapple &euro;0,00</label>
                                </div>
                            </div>

                            <div class="extra">
                                <h4>EXTRA</h4>
                                <input type="checkbox" id="mushrooms" name="mushrooms">
                                <label for="mushrooms">Mushrooms &euro; 1,00</label>

                                <input type="checkbox" id="pepper" name="pepper">
                                <label for="pepper">Pepper &euro; 1,50</label>

                                <input type="checkbox" id="shoarma" name="shoarma">
                                <label for="shoarma">Shoarma &euro; 2,99</label>

                                <input type="checkbox" id="veggie" name="veggie">
                                <label for="veggie">Veggie shoarma &euro; 2,99</label>
                            </div>

                            <div class="type">
                                <label for="type">Pizza type</label>
                                <select name='type' id='type'>
                                    <option value='double tasty'>double tasty</option>
                                    <option value='four tasty'>four tasty</option>
                                </select>
                            </div>

                            <div class="message">
                                <label for="msg">Addtional message</label>
                                <textarea name="msg" id="msg">Anything alse you want to say?</textarea>
                            </div>

                            <div class="news">
                                <h4>Want all the lastest pizza news?</h4>
                                <input type="radio" name="news" id="news-yes" value="yes" checked>
                                <label for="news-yes">Yes</label>
                                <input type="radio" name="news" id="news-no" value="no">
                                <label for="news-no">No</label>
                            </div>

                            <input type="submit" name="submit" id="submit" value="Submit order">
                            
                        </form>
                    HTML;
                    echo $form;
                }
            ?>


            <div class="footer">
                <div class="info">
                    <h5 class="copy">&copy; 2022 Em Men Pizza</h5>
                    <h5>Do good. Be nice. Order pizza by mail!</h5>
                </div>
                <div class="open-hours">
                    <h5>Monday 18:00 - 21:00</h5>
                    <h5>Tuesday 18:00 - 21:00</h5>
                    <h5>Wednesday 18:00 - 21:00</h5>
                    <h5>Thursday 18:00 - 21:00</h5>
                    <h5>Friday 18:00 - 21:00</h5>
                    <h5>Saturday 18:00 - 21:00</h5>
                </div>
            </div>

        </div>
    </div>
</body>
</html>