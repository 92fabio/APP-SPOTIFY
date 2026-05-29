<?php
$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

echo "$artista - $nome - $ano - $tipo - $foto";

include "inc-conexao.php";

$sql = "insert into tb_discografia (artista, nome, ano, tipo, foto) values ('$artista', '$nome', '$ano', '$tipo', '$foto')";

$resultado = mysqli_query($conexao, $sql); // msqli_query é a função que executa a query sql, passando a conexao e a query em si

if ($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}
mysqli_close($conexao);
?>