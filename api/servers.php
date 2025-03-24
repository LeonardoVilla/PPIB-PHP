<?php
require 'db.php'; // Conexão com o banco de dados

// Verifica se o método é GET e se o parâmetro 'unid_id' foi fornecido
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['unid_id'])) {
    // Captura o 'unid_id' da URL
    $unid_id = $_GET['unid_id'];
    
    // Prepara a consulta ao banco de dados
    $stmt = $pdo->prepare("SELECT nome, idade, unidade_id, fotografia FROM servidor_efetivo WHERE unidade_id = ?");
    $stmt->execute([$unid_id]);
    
    // Obtém os resultados da consulta
    $servers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Retorna os dados em formato JSON
    echo json_encode($servers);
}
?>
