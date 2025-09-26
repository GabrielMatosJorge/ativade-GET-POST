<?php

?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<h1> Campos enviados por POST:</h1>";
    echo "Nome: " . $_POST['nome'] . "<br>";
    echo "Nome: " . $_POST['nome'] . "<br>";
    echo "Nome: " . $_POST['nome'] . "<br>";
    echo "Nome: " . $_POST['nome'] . "<br>";
    echo "Nome: " . $_POST['nome'] . "<br>";
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