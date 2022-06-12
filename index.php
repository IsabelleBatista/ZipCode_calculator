<?php
    include_once('cep.php');
    $adress= getAdress();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cep</title>
</head>
<body>
    <div class="box">

    <div class="container">
    </div>
    
    <form action="." method="post">
      <h1>Endereço</h1>
      
          <label>Insira seu Cep:</label>
          <input type="text" name="cep" id="cep" placeholder="Cep" require value="<?php echo $adress->cep ?? '' ?>">

          <input type="text" name="estado" id="estado" placeholder="Estado" value="<?php echo $adress->uf ?? '' ?>" readonly>

          <input type="text" name="cidade" id="cidade" placeholder="Cidade" value="<?php echo $adress->localidade ?? '' ?>" readonly>

          <input type="text" name="bairro" id="bairro" placeholder="Bairro" value="<?php echo $adress->bairro ?? '' ?>" readonly>

          <input type="text" name="rua" id="rua" placeholder="Rua" value="<?php echo $adress->logradouro ?? '' ?>" readonly>

          <button type="submit" name="submi"> Enviar </button>
          
        </div>
      </label>     

    </form>      


</body>
</html>