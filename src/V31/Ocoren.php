<?php

namespace App\V31;

use App\Proceda;

class Ocoren extends Proceda
{
    public function __construct()
    {
        $this->setConfig();
    }

    private function setConfig()
    {

        $this->config = [
            '000' =>[
                'remetente' => [3, 35],
                'destinatario' => [38, 35],
                'data' => [73, 6],
                'hora' => [79, 4],
                'arquivo' => [83, 12],
                'filler' => [95, 25],
            ],
            '340'=> array(
                'identificacao_documento' => [3, 14],
                'filler' => [17, 103],
            ),
            '341'=> array(
                'cgc' => [3, 14],
                'razao_social' => [17, 40],
                'filler' => [57, 63],
            ),
            '342'=> array(
                'cgc_empresa_emissora' => [3, 14],
                'serie_nota_fiscal' => [17, 3],
                'numero_nota_fiscal' => [20, 8],
                'cod_ocorrencia_entrega' => [28, 2], // tabela de ocorrencias 
                'data_ocorrencia' => [30, 8],
                'hr_ocorrencia' => [38, 4],
                'cd_observacao_ocorrencia' => [42, 2],
                'texto_livre'=> [44, 70],
                'filler' => [114, 6],
            ),
            '343'=> array(
                'cgc_empresa_contratante' => [3, 14],
                'filial_emissora_conhecimento' => [17, 10],
                'serie_conhecimento_ocorrencia' => [27, 5],
                'numero_conhecimento_ocorrencia' => [32, 12],
                'filler' => [44, 76]
            ),
        ];
    }

}