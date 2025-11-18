<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles/normalize.css">
    <link rel="stylesheet" href="static/styles/index.css">
    <title>Em Men Pizza</title>
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
            
            <div class="text-content">
                <h1>Em Men Pizza</h1>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis posuere nulla, quis ultrices quam sollicitudin ut. Maecenas ac arcu ullamcorper, aliquam dui vel, scelerisque turpis. Vivamus urna sem, rutrum sed arcu in, cursus dictum diam. Vestibulum bibendum vulputate magna et sagittis. Nullam nunc mauris, laoreet at eros id, maximus ullamcorper lectus. Nulla rhoncus quam eu tristique viverra. Cras risus dolor, pellentesque molestie dictum quis, blandit a augue. Cras pharetra massa ut nisi ullamcorper, ut cursus lorem dictum. Quisque vulputate orci malesuada massa porta sagittis. Aliquam sit amet dui quis ex vehicula placerat.</h5>
            </div>

            <div class="divider">
                <h1>Pick your dough!</h1>
                <div class="divider-line"></div>
            </div>

            <div class="menu-grid">
                <div class="menu-box" id="box-1">
                    <img src="static/img/doublepizza.png" alt="pizza">
                    <h2>Double pizza special</h2>
                    <h4>Double tasty: 2 flavours, 1 pizza</h4>
                    <h5>The best of both worlds on one pizza. Order the Double tasty and create your own pizza. One pizza, two flavours. </h5>
                    <h5>Starting from € 4,99</h5>
                    
                    <a class="order-btn" href="order.php">Choose your flavours</a>
                </div>

                <div class="menu-box" id="box-2">
                    <img src="static/img/doublepizza.png" alt="pizza">
                    <h2>Double pizza special</h2>
                    <h4>Double tasty: 2 flavours, 1 pizza</h4>
                    <h5>The best of both worlds on one pizza. Order the Double tasty and create your own pizza. One pizza, two flavours. </h5>
                    <h5>Starting from € 4,99</h5>
                    
                    <a class="order-btn" href="order.php">Choose your flavours</a>
                </div>

                <div class="menu-box" id="box-3">
                    <img src="static/img/doublepizza.png" alt="pizza">
                    <h2>Double pizza special</h2>
                    <h4>Double tasty: 2 flavours, 1 pizza</h4>
                    <h5>The best of both worlds on one pizza. Order the Double tasty and create your own pizza. One pizza, two flavours. </h5>
                    <h5>Starting from € 4,99</h5>
                    
                    <a class="order-btn" href="order.php">Choose your flavours</a>
                </div>

                <div class="menu-box" id="box-4">
                    <img src="static/img/doublepizza.png" alt="pizza">
                    <h2>Double pizza special</h2>
                    <h4>Double tasty: 2 flavours, 1 pizza</h4>
                    <h5>The best of both worlds on one pizza. Order the Double tasty and create your own pizza. One pizza, two flavours. </h5>
                    <h5>Starting from € 4,99</h5>
                    
                    <a class="order-btn" href="order.php">Choose your flavours</a>
                </div>
            </div>

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