<?php

// Após obter o authorization_code, o client app deve realizar uma requisição POST para o endpoint /token,
// Se o authorization_code estiver correto, os tokens de acesso serão retornados pelo servidor.
// Lembrando que após obter o authorization_code, o prazo para requisitar os tokens é de 1 minuto. Após este período o authorization_token se tornará inválido.

$client_id = 'CLIENT_ID'; 
$client_secret = 'CLIENT_SECRET';
$authorization_url = 'https://api.bling.com.br/Api/v3/oauth/authorize';
$token_url = 'https://api.bling.com.br/v3/oauth/token';
$code = $_GET['code'];
$state = $_GET['state'];

$credentials64 = base64_encode("$client_id:$client_secret");


// Iniciando o cURL
$cURL = curl_init($token_url);

// Headers
$headers = array(
    "Authorization: Basic $credentials64"
);

// Dados enviados via POST
$data = array(
    'grant_type' => 'authorization_code',
    'code' => $code
);

// Configurando as opções do cURL
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cURL, CURLOPT_POST, true);
curl_setopt($cURL, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($cURL, CURLOPT_HTTPHEADER, $headers);

// Executando a requisição e capturando a resposta
$response = curl_exec($cURL);

// Verifica se houve erro
if(curl_errno($cURL)) {
    echo "erro no cURL: " . curl_error($cURL);
} else {
    // Exibe a resposta
    echo "<br><br>Resposta do servidor: " . $response;
}

// Fechando a sessão
curl_close($cURL);

?>
