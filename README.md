# aomegachatgpt
Aplicação PHP implementando um cliente do CHATGPT com o uso das classes do projeto openai-php/client hospedado no Github em https://github.com/openai-php/client . Mostro como ensinar ao modelo do Chatgpt para ele saber responder a informações específicas sobre minha empresa, a Aomega Treinamento e Consultoria (www.aomega.com.br).

Requer PHP 8.1+
Primeiro, instalar o OpenAI via gerenciador de pacotes COMPOSER:

> composer require openai-php/client

Se assegure de que o plugin do composer denominado php-http/discovery possa rodar ou instalar um cliente manualmente caso seu projeto
não tenha um cliente PSR-18 integrado.

> composer require guzzlehttp/guzzle

A configuração do arquivo composer.json é importante para nossa aplicação poder fazer autoload das classes necessárias. Como no meu projeto o composer após instalar o openai-php/client criou uma pasta VENDOR com várias subpastas, e as classes do OPENAI-PHP/CLIENT ficaram no seguinte caminho:

vendor/openai-php/client/src

Para a aplicação funcionar corretamente é preciso acrescentar as seguintes linhas ao composer.json :

    "autoload": {
        "psr-4": {"MeuNamespace\\": "vendor/openai/client/src/"}
    }
    
Conferir a configuração completa final do arquivo composer.json no arquivo do meu projeto.    
