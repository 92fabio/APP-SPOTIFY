<?php
$titulo_da_pagina = "Discografia - Listagem";
include "inc-cabecalho.php";
?>
<body>
    <main class="container">
        <?php include "inc-menu.php"; ?>
        <h1>Listagem de Discografia</h1>
        <div class="row">
            <div class="col">
                <table>
            </div>
        </div>
    </main>
    <?php include "inc-rodape.php"; ?>
<h1>Listagem de Discografia</h1>
        <div class="row">
            <div class="col">
                <tr>
                    <th>Artista</th>
                    <th>Nome do álbum</th>
                    <th>Ano de lançamento</th>
                    <th>Tipo</th>
                    <th>Foto</th>
                </tr>
                <?php
                #abrir conexao com o banco de dados
                include "inc-conexao.php";

                #consultar os dados da tabela de discografia
                $sql = "select * from tb_discografia order by artista";
                $resultado = mysqli_query($conexao, $sql);

                #listar os dados da tabela de discografia
                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td> {$linha_resultado['id']} </td>";
                    echo "<td> {$linha_resultado['artista']} </td>";
                    echo "<td> {$linha_resultado['nome']} </td>";
                    echo "<td> {$linha_resultado['ano']} </td>";
                    echo "<td> {$linha_resultado['tipo']} </td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
</div>
</main>
</body>
<?php include "inc-rodape.php"; ?>