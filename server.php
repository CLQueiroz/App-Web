<?php
// Define o cabeçalho para permitir requisições de diferentes domínios (opcional)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Lê o conteúdo da requisição
$input = file_get_contents("php://input");

// Decodifica o JSON recebido
$data = json_decode($input, true);

// Verifica se o JSON foi decodificado corretamente
if ($data !== null) {
    // Exibe o JSON recebido
    echo json_encode([
        'receivedData' => $data,
        'message' => 'Dados recebidos com sucesso!'
    ]);
} else {
    // Mensagem de erro caso o JSON não tenha sido decodificado corretamente
    echo json_encode([
        'error' => 'Erro ao decodificar o JSON'
    ]);
}
