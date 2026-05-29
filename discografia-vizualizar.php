<?php
$titulo_da_pagina = "Visualizar Discografia";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id= $_GET['id']; 

$sql = "select * from tb_discografia where id = $id";
$resultado = mysqli_query($conexao, $sql);

$foto =$artista = $nome = $ano = $tipo = "";

while($linha = mysqli_fetch_assoc($resultado)){
    $foto = $linha['foto'];
    $artista = $linha['artista'];
    $nome = $linha['nome'];
    $ano = $linha['ano'];
    $tipo = $linha['tipo'];
}

?>

<body>
 <?php include "inc-menu.php"; ?>

    <main class="container mt-5 text-center mb-5">
        <h1 class=>Visualizar Discografia</h1>
        foto: <img src="<?=$foto; ?>" alt="<?=$nome; ?>" > <br>
        Artista: <?=$artista; ?> <br>
        Nome do album: <?=$nome; ?> <br>
        Ano de lançamento: <?=$ano; ?> <br>
        Tipo: <?=$tipo; ?> <br>
    </main>

<?php
mysqli_close($conexao);
include "inc-rodape.php"
?>