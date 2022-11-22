<!DOCTYPE html>
<!--<! -- Trazer Resultados CEP, Rua, Bairro e Estado -->
<?php $address=getAddress() ?>
<html lang="pt-br"> <!-- Declaração do Idioma  -->
    <head>
        <meta charset="UTF-8">
        <title> MEU CEP </title>
        
<form action="" method="post">  
    @csrf      
    <label> Insira o CEP: </label>
    <input type="text" name="cep" value="<?php echo $address->cep ?>"> 
    <input type="submit" value="Buscar"> <br />
    <label>Rua:
        <input name="rua" type="text" id="rua" size="60" value="<?php echo $address->logradouro ?>" readonly/></label><br />
    <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" value="<?php echo $address->bairro ?>" readonly/></label><br />
    <label>Estado:
        <input name="uf" type="text" id="uf" size="2" value="<?php echo $address->uf ?>" readonly/></label><br />
    <label>Casa:
        <input name="casa" type="text" id="casa" size="4"/></label>
</form>
    
</body>
</html>