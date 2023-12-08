<?php
// Define os cabeçalhos CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Verifica se a requisição é um OPTIONS, e se for, retorna com um cabeçalho 200 (sucesso)
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("HTTP/1.1 200 OK");
    exit();
}

// Define o tipo de conteúdo como JSON
header('Content-Type: application/json');

// Lê o conteúdo do arquivo .geo.json e envia como resposta
echo file_get_contents('pontos.geojson'); // Substitua pelo nome correto do seu arquivo .geo.json
?>
