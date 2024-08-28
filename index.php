<?php 



$ch = curl_init();

$url = "https://quiosquesexshop.com.br/teste_dev_jr.json";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
}
else {
    $products = json_decode($resp, true);
    if(count($products) != 0) {
?>  

        <!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="index.css" />
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
    <div id="container">
      <div id="slider-container">
        <span onclick="slideRight()" class="btn"></span>
        <div id="slider">
        <?php 
            foreach($products as $product){
                ?>  
                  
                    <div class="itens slide">
                        <img src="<?php echo $product["image"] ?>" alt="<?php echo $product["name"] ?>" />
                        <div class="itens-info">
                            <span class="product-name"><?php echo $product["name"] ?></span>
                            <span class="product-price"><?php echo "R$" . $product["price"]. "0" ?></span>
                        </div>
                    </div>
               
                <?php
            }
            ?>
        </div>
        <span onclick="slideLeft()" class="btn"></span>
      </div>
    </div>
    <script src="index.js"></script>
  </body>
</html>
<?php
}
}

curl_close($ch);

?>
