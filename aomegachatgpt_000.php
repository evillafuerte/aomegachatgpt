<?php
require "vendor/autoload.php";
//$yourApiKey = getenv('OPEN_API_KEY');
$yourApiKey = "sua-key-cadastrada-no-site-da-openai";
$client = OpenAI::client($yourApiKey);

$response = $client->chat()->create([
    'model' => 'gpt-3.5-turbo',    
    'max_tokens' => 300,
    'temperature' => 0.3,
    'messages' => [
        ['role' => 'user', 
        'content' => 'O Excel é uma ferramenta boa para '],       
    ],
]);

foreach ($response->choices as $result) {
    $result->index; // 0
    $result->message->role; // 'assistant'
    $result->message->content; // '\n\nHello there! How can I assist you today?'
    $result->finishReason; // 'stop'
}
 echo $result->message->content; // resposta do chatgpt a ser exibida na tela de resposta ao usuário.

?>
