<?php
$conexao = mysqli_connect("localhost", "root", "", "db_spotify"); // conexao para o banco de dados
if (!$conexao){
    die("<h3>erro</h3> " . mysqli_connect_error());
}
?>