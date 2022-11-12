<!DOCTYPE html>
<!--<! -- Trazer Resultados CEP, Rua, Bairro e Estado -->
<?php
    function getAddress(){
        if( isset ($_POST['cep'])){
            $cep = $_POST['cep'];
            $cep = filterCep($cep);
            if(isCep($cep)){
                $address = getAddressViaCep($cep);
                if(property_exists($address,'erro')){
                    $address = addressEmpty();
                    $address->cep = 'CEP não encontrado!';    
                }
            }else{
                $address = addressEmpty();
                $address->cep = 'CEP inválido!';
            }
        }else{
            $address = addressEmpty();
        }
        return $address;
    }
    function addressEmpty(){
        return (object)[
            'cep' => '',
            'logradouro' => '',
            'bairro' => '',
            'uf' => ''
        ];
    }
    function filterCep(String $cep):String{
        return preg_replace('/[^0-9]/','',$cep); 
    }
    function isCep(String $cep):bool{
        return preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep);
    }
    function getAddressViaCep(String $cep){
        $url = "https://viacep.com.br/ws/{$cep}/json/";
        return json_decode(file_get_contents($url));
    }
    $address = getAddress();
?>
<html lang="pt-br"> <!-- Declaração do Idioma  -->
    <head>
        <meta charset="UTF-8">
        <title> MEU CEP </title>
        
<form action="" method="post">  
    @csrf      
    <label> Insira o CEP: </label>
    <input type="text" name="cep" value="<?php echo $address->cep ?>" > 
    <input type="submit" value="Enviar"> <br />
    <label>Rua:
        <input name="rua" type="text" id="rua" size="60" value="<?php echo $address->logradouro ?>"/></label><br />
    <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" value="<?php echo $address->bairro ?>" /></label><br />
    <label>Estado:
        <input name="uf" type="text" id="uf" size="2" value="<?php echo $address->uf ?>" /></label><br />
</form>
    
</body>
</html>