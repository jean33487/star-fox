<?php /*<!DOCTYPE html>
<!--<! -- Trazer Resultados CEP, Rua, Bairro e Estado -->

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
        <input name="rua" type="text" id="rua" size="60" /></label><br />
    <label>Bairro:
        <input name="bairro" type="text" id="bairro" size="40" /></label><br />
    <label>Estado:
        <input name="uf" type="text" id="uf" size="2" /></label><br />
</form>
    <?php
    if (!empty($_POST['cep'])) {

        $cep = $_POST['cep'];

        $address = (get_address($cep));

        echo "<br><br>CEP Informado: $cep<br>";
        echo "Rua: $address->logradouro<br>";
        echo "Bairro: $address->bairro<br>";
        echo "Estado: $address->uf<br>";
    }

    function get_address($cep) {


        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";

        $xml = simplexml_load_file($url);
        return $xml;
    }
    ?>
</body>
</html>
*/?>

<?php
function get_endereco($cep){
  // formatar o cep removendo caracteres nao numericos
  $cep = preg_replace("/[^0-9]/", "", $cep);
  $url = "http://viacep.com.br/ws/$cep/xml/";
  $xml = simplexml_load_file($url);
  return $xml;
}
?>
<meta charset="UTF-8">
<h1>Pesquisar Endereço</h1>
<form action="" method="post">
    
  <input type="text" name="cep">
  <button type="submit">Pesquisar Endere&ccedil;o</button>
</form>


<?php if($_POST['cep']){ ?>
<h2>Resultado da Pesquisa</h2>
<p>
  <?php $endereco = get_endereco($_POST['cep']); ?>
  <b>CEP: </b> <?php echo $endereco->cep; ?><br>
  <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
  <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
  <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
  <b>UF: </b> <?php echo $endereco->uf; ?><br>
</p>
<?php } ?>