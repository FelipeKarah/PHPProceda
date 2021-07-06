# Proceda  🚧 🚀 Em desenvolvimento...  🚧
Projeto para comunicação via EDI entre transportadora e remetente com métodos para decodificação e codificação de arquivos no formato Proceda

## Tabela de conteúdos
<!--ts-->
* [Pré-requisitos](#pré-requisitos)
* [Instalação](#instalação)
* [Como usar](#como-usar)
* [Autor](#autor)
<!--te-->

## Pré-requisitos

* Php ^7.4
* Composer ^2

## Instalação

No cmd, dentro do diretório selecionado, digite o comando abaixo:

```shell
composer require mtelesborges/php-chromedriver-manager
```

## Como usar

Abaixo, um *snipet* de uso do decoder:

```PHP
use App\V30\Doccob;

$file = <<<CONTENT
000                                   33722100                           2406211107COB240611070                                                                           
350COBRA240611070                                                                                                                                                         
35112260426000325abcdefghijklmnopqrstuvwxyzabcdefghijklmno                                                                                                                 
35200000002090   00002323661606202101072021000000002281304BCO00000000027375700000000000000000000000000000000000000Banco Itau Steel                   00000000000000000I   
35300000002104          0484880000000002752980906202138717511000100594134720001198201275000014833210682012750000148570040000484881903918263                                                                           
3541  0002241909062021305000000000002897500038717511000100                                                                                                                
CONTENT;

$file = explode(PHP_EOL, $file);

$parser = new Doccob();

$content = $parser->decode($file);

print_r($content);
```

## Autor

[Felipe Karah Maranha da Cunha](https://www.linkedin.com/in/felipe-karah-maranha-da-cunha-14529b19b)