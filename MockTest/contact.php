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
                <h1>Request a car</h1>
                <div class="title-line"></div>
            </div>
        

            <form action="result.php" method="post">
                <div class="firstname textinput">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                
                <div class="lastname textinput">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname">
                </div>

                <div class="brand">
                    <label for="brand">Car brand & model</label>
                    <div class="dropdowns">
                        <select name='brand' id='brand'>
                            <option value='volkswagen'>Volkswagen</option>
                            <option value='volvo'>Volvo</option>
                        </select>
                        <select name='model' id='model'>
                            <option value='hatchback'>Hatchback</option>
                            <option value='cabrio'>Cabrio</option>
                        </select>
                    </div>
                </div>

                <div class="options">
                    <label for="options">Options</label>
                    <textarea name="options" id="options"></textarea>
                </div>

                <div class="insurance">
                    <h3>Do you want insurance?</h3>
                    <div class="radio-option">
                        <input type="radio" name="insurance" id="insurance_yes" value="yes">
                        <label for="insurance_yes">Yes</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" name="insurance" id="insurance_no" value="no">
                        <label for="insurance_no">No</label>
                    </div>
                </div>

                <input type="submit" name="submit" id="submit" value="Send Request">
            </form>
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