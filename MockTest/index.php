<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024px, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles/index.css">
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
                <h1>Pick one of out popular cars!</h1>
                <div class="title-line"></div>
            </div>

            <div class="cars-display">
                <div class="car-box" style="grid-column: 1/2;">
                    <img src="static/images/car1.png" alt="car image">
                    <h2>Hyonda</h2>
                    <h3>€ 120.000</h3>
                    <h4>Beatiful car that can last for years to come.</h4>
                </div>

                <div class="car-box" style="grid-column: 2/3;">
                    <img src="static/images/car1.png" alt="car image">
                    <h2>Hyonda</h2>
                    <h3>€ 120.000</h3>
                    <h4>Beatiful car that can last for years to come.</h4>
                </div>

                <div class="car-box" style="grid-column: 3/4;">
                    <img src="static/images/car1.png" alt="car image">
                    <h2>Hyonda</h2>
                    <h3>€ 120.000</h3>
                    <h4>Beatiful car that can last for years to come.</h4>
                </div>

                <div class="car-box" style="grid-column: 4/5;">
                    <img src="static/images/car1.png" alt="car image">
                    <h2>Hyonda</h2>
                    <h3>€ 120.000</h3>
                    <h4>Beatiful car that can last for years to come.</h4>
                </div>

                <div class="car-box" style="grid-column: 1/2;">
                    <img src="static/images/car1.png" alt="car image">
                    <h2>Hyonda</h2>
                    <h3>€ 120.000</h3>
                    <h4>Beatiful car that can last for years to come.</h4>
                </div>

                <div class="car-box" style="grid-column: 4/5;">
                    <img src="static/images/car1.png" alt="car image">
                    <h2>Hyonda</h2>
                    <h3>€ 120.000</h3>
                    <h4>Beatiful car that can last for years to come.</h4>
                </div>
            </div>

            <div class="text">
                <h2>Who is Bing cars?</h2>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis posuere nulla, quis ultrices quam sollicitudin ut. Maecenas ac arcu ullamcorper, aliquam dui vel, scelerisque turpis. Vivamus urna sem, rutrum sed arcu in, cursus dictum diam. Vestibulum bibendum vulputate magna et sagittis. Nullam nunc mauris, laoreet at eros id, maximus ullamcorper lectus. Nulla rhoncus quam eu tristique viverra. Cras risus dolor, pellentesque molestie dictum quis, blandit a augue. Cras pharetra massa ut nisi ullamcorper, ut cursus lorem dictum. Quisque vulputate orci malesuada massa porta sagittis. Aliquam sit amet dui quis ex vehicula placerat.</h5>
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
</html>