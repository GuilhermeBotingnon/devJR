<?php

if($_POST) {
  $name = $_POST["name"];
  $price = $_POST["price"];
  
  $tmpFile = $_FILES['image']['tmp_name'];
  $newFile = 'assets/img/'.$_FILES['image']['name'];
  $result = move_uploaded_file($tmpFile, $newFile);

  $produto = array(
    "name"=> $name,
    "price"=> $price,
    "image"=> $newFile
  );
  
  include_once 'apiPost.php';

}


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscricao Formulario</title>
    <link rel="stylesheet" href="assets/css/form.css" />
  </head>
  <body>
    <div class="container">
      <div class="contactForm">
        <h1>Cadastro Produto</h1>
        <div class="formInput">
          <form action="index.php" method="post" id="contactForm" enctype="multipart/form-data">
            <div class="formGroup3">
              <label for="CEP"> Nome do Produto </label>
              <input type="text" name="name" maxlength="9" required/>
            </div>
            <div class="formGroup3">
              <label for="nomeCidade"> Preço </label>
              <input type="text" name="price" required/>
            </div>
            <div class="formGroup3">
              <label for="CEP"> Foto Produto </label>
              <input type="file" name="image" maxlength="9" required/>
            </div>
            <div class="formGroup4">
              <div id="formButton">
                <input type="submit" value="Cadastrar" onClick=formConfirm() />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      function formConfirm() {
        window.location.href = 'index.php';
      }
    </script>
  </body>
</html>
