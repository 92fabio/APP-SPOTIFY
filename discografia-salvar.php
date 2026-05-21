<?php
$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

echo "$artista - $nome - $ano - $tipo - $foto";

$conexao = mysqli_connect("localhost", "root", "", "db_spotify");
if (!$conexao){
    die("<h3>erro</h3> " . mysqli_connect_error());
}

$sql = "insert into tb_discografia (artista, nome, ano, tipo, foto) values ('$artista', '$nome', '$ano', '$tipo', '$foto')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}
mysqli_close($conexao);
?>