<?php
// o isset() verifica se uma variável existe 
// $_GET guarda os dados quando enviados por GET
//Dentro dos [] colocamos o NAME de um input para obter seu valor
// Esse IF verifica se o campo nome foi enviado por GET.
if(isset($_GET['nome'])){
    echo "<h1> Campos enviados por GET:</h1>";
    echo "Nome: " . $_GET['nome'] . "<br>";
    //podemos colocar o valor que veio por GET em outra variável
    $ano = $_GET['ano_nascimento'];
    // date("Y") retorna o ano atual do SERVIDOR ("PORTA")
    $idade = date("Y") - $ano;
    echo "<p> Nasceu em: $ano e tem $idade anos.</p>";
}else{
    echo "<P style='color: red;'>Não veio nada por GET!</P>";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // código "igual" do GET 
    echo "<h1> Campos enviados por GET:</h1>";
    echo "Nome: " . $_POST['nome'] . "<br>";
    //podemos colocar o valor que veio por GET em outra variável
    $ano = $_POST['ano_nascimento'];
    // date("Y") retorna o ano atual do SERVIDOR ("PORTA")
    $idade = date("Y") - $ano;
    echo "<p> Nasceu em: $ano e tem $idade anos.</p>";  
}else{
    echo "<P style='color: red;'>Não veio nada por POST!</P>";

}

?>
<pre>
<?php
// Olhe o resultado na página e descreva aqui o aconteceu...
print_r($_SERVER);
?>
</pre>