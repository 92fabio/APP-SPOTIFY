<!DOCTYPE html>
<html lang="pt-br">
<head>
   
<?php
    $titulo_da_pagina = "Cadastro de discografia";
    include "inc-cabeçalho.php";
?>

<body>
<main>
    <div class="container">
     <?php include "inc-menu.php"; ?>


    <h1>Cadastro de Discografia</h1>

    <form action="discografia-salvar.php" method="post">
        <label>Artista:</label><br>
        <input type="text" name="artista"><br><br>
 
        <label>Nome do álbum:</label><br>
        <input type="text" name="nome"><br><br>
   
        <label>Ano de lançamento:</label><br>
        <input type="number" name="ano"><br><br>
   
        <label>Tipo:</label><br>
            <select type="select" name="tipo">
            <option value="album">Álbum</option>
            <option value="single">Single</option>
        </select><br><br>
    
        <label>Foto:</label><br>
        <input type="text" name="foto"><br><br>
    
        <button type="submit">Salvar</button> 
        <button type="reset">Limpar</button>  <br><br>
 
</form>
 </main>

 <?php include "inc-rodape.php"; ?>

</body>
</html>