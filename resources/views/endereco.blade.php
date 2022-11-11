<!DOCTYPE html>
<!--<! -- Trazer Resultados CEP, Rua, Bairro e Estado -->
<?php
    if( isset ($_POST['cep']))
    $cep = $_POST['cep'];
    $url = "https://viacep.com.br/ws/{$cep}/json/"
    $address = json_decode(file_get_contents($url));
?>
<html lang="pt-br"> <!-- Declaração do Idioma  -->
    <head>
        <meta charset="UTF-8">
        <title> MEU CEP </title>
        
<form action="" method="post">  
    @csrf      
    <label> Insira o CEP: </label>
    <input type="text" name="cep"> 
    <input type="submit" value="Enviar"> <br />
    <label>Rua:
        <input name="rua" type="text" id="rua" size="60" value="<?php echo $address->logradouro ?? '' ?>"/></label><br />
    <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" value="<?php echo $address->bairro ?? '' ?>" /></label><br />
    <label>Estado:
        <input name="uf" type="text" id="uf" size="2" value="<?php echo $address->uf ?? '' ?>" /></label><br />
</form>
    
</body>
</html>