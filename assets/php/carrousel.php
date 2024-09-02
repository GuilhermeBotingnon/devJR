<!DOCTYPE html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/index.css" />
        </head>
  <body>
    <div class="nav-bar">
            <img
            src="https://quiosquesexshop.com.br/media/logo/stores/1/quiosque_logo.webp"
            alt="Logo-Quiosque"
            srcset=""
            class="logo"
            />
            </div>
    <?php include_once "assets/php/form.php"; ?>
    <div id="container">
      <div id="slider-container">
        <span onclick="slideRight()" class="btn"></span>
        <div id="slider">
        <?php 
            foreach($produtos as $produto){
                ?>  
            
                    <div class="itens slide">
                        <img src="<?php echo  $produto["image"] ?>" alt="<?php echo $produto["name"] ?>" />
                        <div class="itens-info">
                            <span class="product-name"><?php echo $produto["name"] ?></span>
                            <span class="product-price"><?php echo "R$" . $produto["price"]?></span>
                        </div>
                    </div>
               
                <?php
            }
            ?>
        </div>
        <span onclick="slideLeft()" class="btn"></span>
      </div>
    </div>
    <script src="assets/js/index.js"></script>
  </body>
</html>