# aomegachatgpt
Aplicação PHP implementando um cliente do CHATGPT com o uso das classes do projeto openai-php/client hospedado no Github em https://github.com/openai-php/client . Mostro como ensinar ao modelo do Chatgpt para ele saber responder a informações específicas sobre minha empresa, a Aomega Treinamento e Consultoria (www.aomega.com.br).

Requer PHP 8.1+
Primeiro, instalar o OpenAI via gerenciador de pacotes COMPOSER:

> composer require openai-php/client

Se assegure de que o plugin do composer denominado php-http/discovery possa rodar ou instalar um cliente manualmente caso seu projeto
não tenha um cliente PSR-18 integrado.

> composer require guzzlehttp/guzzle
