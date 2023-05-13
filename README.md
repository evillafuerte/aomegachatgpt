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
    
Conferir a configuração completa final no arquivo composer.json do meu projeto.  

Videos do projeto:
https://www.youtube.com/watch?v=ER3y6Mhrlhs&list=PL4qJBquKR8kT5blC41gx64ExIdAEMHX1f&index=3 - Apresentação pessoal
https://www.youtube.com/watch?v=7_a0r6SvdFk&list=PL4qJBquKR8kT5blC41gx64ExIdAEMHX1f&index=2&t=828s - Apresentação do projeto


Também é preciso carregar estas configurações do composer na sua aplicação. Para isso basta acrescentar as seguintes linhas de código 
no início de cada script PHP  que vai fazer uso dass classes em OPENAI-PHP/CLIENT:

require "vendor/autoload.php";

Os scripts PHP estão numerados sequencialmente começando a numeração em 000 . O arquivo com a menor numeração (aomegachatgpt_000.php) 
contém o código mínimo inicial. A cada versão com um número sequencial maior acrescento mais recursos e a versão mais completa para testes é a aomegachatgpt_002.php .

