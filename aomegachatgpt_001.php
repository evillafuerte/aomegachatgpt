<?php
require "vendor/autoload.php";
//$yourApiKey = getenv('OPEN_API_KEY');
$yourApiKey = "sua-key-cadastrada-no-site-da-openai";
$client = OpenAI::client($yourApiKey);
$empresa = "Aomega Treinamento e Consultoria";
$url = "http://www.aomega.com.br";
$empresa_nick = "Aomega";
$duvida = "Quais são os treinamentos oferecidos pela Aomega?";

$conhecimento = "Nós da $empresa, também conhecida como $empresa_nick,
oferecemos serviços de treinamento em Excel níveis básico, intermediário e avançado,
Excel VBA, Análise de Dados com Power BI, SQL e Inteligência 
artificial, engenharia de PROMPTS no CHATGPT e uso da API. 
Ministramos treinamentos online individuais e para grupos via 
videoconferência ou presencias para empresas (in company) . 
A URL de nosso site é $url .
Para solicitar informações adicionais entre 
em contato conosco através de nosso formulário na página FALE CONOSCO .
A duração dos treinamentos pode ser consultada nos links de aulas 
de nosso site. A duração pode variar para os treinamentos personalizados. Entre 
em contato conosco através de nosso formulário na página FALE CONOSCO ";

$prompt = "Responder a dúvida $duvida com base nas informações 
    a seguir: $conhecimento ";

$response = $client->chat()->create([
    'model' => 'gpt-3.5-turbo',    
    'max_tokens' => 300,
    'temperature' => 0.3,
    'messages' => [
        ['role' => 'user', 
        'content' => $prompt],       
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
