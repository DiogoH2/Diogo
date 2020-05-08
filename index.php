<?php
	include_once ('viacep.php');
?>
 <! DOCTYPE html>
<html  lang = "pt-br">
<head>
    <meta  charset = "UTF-8" >
    <meta  name = "viewport"  content = " width = largura do dispositivo, escala inicial = 1.0 " >
API     <title> Consumindo </title>
    <link  rel = "stylesheet"  href = "style.css" >
</head>
<body>
    <form  action = "."  method = " post ">
        <p> Digite o CEP para encontrar o endereço. </p>
        <input type = "text"  espaço reservado = " Digite um cep ... "  name = " cep " <?php echo $address -> cep ?>>
        <input type = "submit"><br>
        <input type = "text" espaço reservado = "rua"  name = "rua" value = "<?php echo $address -> logradouro ?>"><br>
        <input type = "text" espaço reservado = "bairro" name = "bairro" <?php echo $address -> bairro ?>><br>
        <input type = "text" espaço reservado = "cidade " name = "cidade" <?php echo $address -> localidade ?>><br>
        <input type = "text" espaço reservado = "estado " name = "estado" <?php echo $address -> uf ?>>
    </form >
</body>
</html>