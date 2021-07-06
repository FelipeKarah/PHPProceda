<?php

use App\V31\Ocoren;
use App\V30\Doccob;

require "./vendor/autoload.php";

$file = file("./vars/doccob");
$file = <<<CONTENT
000                                   33722100                           2406211107COB240611070                                                                           
350COBRA240611070                                                                                                                                                         
35112260426000325Steel Log Com. e Log. Transportadora LTD                                                                                                                 
35200000002090   00002323661606202101072021000000002281304BCO00000000027375700000000000000000000000000000000000000Banco Itau Steel                   00000000000000000I   
CONTENT;
$file = <<<CONTENT
00012345678904321                     12345678901234                     2701161517COB270115170                                                                                                                                                                                                          
350COB270115170                                                                                                                                                                                                                                                                                          
35112345678901234Transportes Lages LTDA                                                                                                                                                                                                                                                                  
35212345678901234000112345678902701201607022016000000000100010B  00000000000112800000000000000000000000000000000000000BANCO NDD                          12349123456789099I                                                                                                                              
35312345678901234  1      3010000000001000002701201600000000000000000000000000000000000000000031160112345678901234570010000003011000000008Dominio do embarque                               Chave do Embarque                                 000000000001234                                            
354   00000000000000000000000000000000000000000000000000000                                                                                                                                                                                                                                              
3550001000000000100010 
CONTENT;

$file = <<<CONTENT
000                                   33722100                           2406211107COB240611070                                                                           
350COBRA240611070                                                                                                                                                         
35112260426000325Steel Log Com. e Log. Transportadora LTD                                                                                                                 
35200000002090   00002323661606202101072021000000002281304BCO00000000027375700000000000000000000000000000000000000Banco Itau Steel                   00000000000000000I   
35300000002104          0484880000000002752980906202117433866000199497958000018831226042600083033210612260426000830570040000484881903918263                                                                           
3541  0002241909062021305000000000002897500017433866000199                                                                                                                
CONTENT;
$file = explode(PHP_EOL, $file);

$parser = new Doccob();
$content = $parser->decode($file);
print_r($content);
die;

    $params = array(
        array(
            'remetente' => 'samuel',
            'destinatario' => 'TESTE',
            'data' => 'TESTE',
            'hora' => 'TESTE',
            'arquivo' => 'TESTE',
            'filler' => 'TESTE',
            'identificacao_documento' => 'teste',
            'filler' => 'fasafasfsad',
            'cgc' =>'fsdfsf',
            'razao_social' => 'fsdfsfsfsf',
            'filler' => 'gfdhfhgjdfhgfb',
            'cgc_empresa_emissora' => 'dfsdfafasdf',
            'serie_nota_fiscal' => 'dfsdfafasdf',
            'numero_nota_fiscal' => 'dfsdfafasdf',
            'cod_ocorrencia_entrega' => 'dfsdfafasdf',
            'data_ocorrencia' => 'dfsdfafasdf',
            'hr_ocorrencia' => 'dfsdfafasdf',
            'cd_observacao_ocorrencia' => 'dfsdfafasdf',
            'texto_livre'=> 'dfsdfafasdf',
            'filler' => 'dfsdfafasdf',
            'cgc_empresa_contratante' => 'fkdnsofnsoi',
            'filial_emissora_conhecimento' => 'fkdnsofnsoi',
            'serie_conhecimento_ocorrencia' => 'fkdnsofnsoi',
            'numero_conhecimento_ocorrencia' => 'fkdnsofnsoi',
            'filler' => 'fkdnsofnsoi',
        )
    );

    $parser = new Ocoren();
    $content = $parser->encode($params);

