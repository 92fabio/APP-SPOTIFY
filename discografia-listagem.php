<?php
$titulo_da_pagina = "Listagem de Discografia";
include "inc-cabecalho.php";
?>

    <main class="container">
 
    <?php
    include "inc-menu.php";
    ?>
 
    <h1>Listagem de Discografia</h1>
 
    <div class="row mb-3">
        <div class="col">    
            <a class="btn btn-sucess me-2" hreef="discografia-formulario.php">Nova Discografia</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <tr>
                    <td>ID</td>
                    <td>Artista</td>
                    <td>Album</td>
                    <td>Ano</td>
                    <td>Tipo</td>
                </tr>
 
                <?php
                include "inc-conexao.php";
               
 
                $sql = " select * from tb_discografia order by artista , ano";
                $resultado = mysqli_query($conexao, $sql);
 
                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td> {$linha_resultado['id']} </td> ";
                    echo "<td> {$linha_resultado['artista']} </td> ";

                    echo "<td> <a href='discografia-vizualizar.php?id={$linha_resultado['id']}'>{$linha_resultado['nome']}</a> </td> ";

                    echo "<td> {$linha_resultado['ano']} </td> ";
                    echo "<td> {$linha_resultado['tipo']} </td> ";
                    echo "<tr>";
                }
 
                mysqli_close($conexao);
                ?>
                </table>
                
            </div>
        </div>
    </main>
   
    <?php include "inc-rodape.php"; ?>
 
