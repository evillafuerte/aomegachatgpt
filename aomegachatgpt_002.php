<?php
if (isset($_POST["duvida"])) {
require "vendor/autoload.php";
//$yourApiKey = getenv('OPEN_API_KEY');
$yourApiKey = "sua-key-cadastrada-no-site-da-openai";
$client = OpenAI::client($yourApiKey);
$empresa = "Aomega Treinamento e Consultoria";
$url = "http://www.aomega.com.br";
$empresa_nick = "Aomega";
$duvida = $_POST["duvida"];

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

// echo $result->message->content; -- resposta do chatgpt a ser exibida na tela de resposta ao usuário.
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
     <title>Aomegagpt - A Inteligência Artificial da Aomega</title>
  </head>
  <body>       
	<form method="POST" action="">
           <?php if (isset($result)) {
                echo("<strong>P: ".$_POST["duvida"]."</strong><br/>");
                echo $result->message->content."<br/><br/>";
            }  ?>
		<h3>O que você gostaria de saber?</h3><br>
		<textarea id="duvida" name="duvida" rows="4" cols="50"></textarea><br>
		<input type="submit" value="Enviar">
	</form>
          
  </body>
</html>
