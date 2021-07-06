<?php

namespace App\V31;

use App\Proceda;

class Conemb extends Proceda
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
                'filler' => [95, 585],
            ],
            '020'=> [
                'identificacao_documento' => [3, 14],
                'filler' => [17, 663],
            ],
            '021'=> [
                'identificacao_transportadora' => [3, 14],
                'filler' => [17, 663],
            ],
            '022'=> [
                'filial_emissora' => [3, 10],
                'serie' => [13, 5],
                'numero' => [18, 12],
                'data_emissao' => [30, 8],
                'condicao_frete' => [38, 1],
                'peso_tranportado' => [39, 6],
                'valor_total_frete' => [46, 14],
                'base_calc_icms'=> [61, 14],
                'taxa_icms' => [76, 3],
                'valor_icms' => [80,14],
                'valor_frete_por_peso_volume' => [95, 14],
                'frete_valor' => [110, 14],
                'valor_sec'=> [125, 14],
                'valor_itr' => [140,14],
                'valor_despacho' => [155,14],
                'valor_pedagio' => [170, 14],
                'valor_ademe' => [185, 14],
                'substituicao_tributaria' => [200, 1],
                'filler' => [201, 3],
                'cgc_emissor' => [204, 14],
                'cgc_embarcadora' => [218, 14],
                'nota_fiscal' => [232, 439,[
                    'serie' => [0, 3],
                    'numero' => [3, 8]
                ]],
                'acao_documento' => [672, 1],
                'tipo_conhecimento' => [673, 1],
                'indicacao_cont_nota_fiscal' => [674, 1],
                'cod_operadora_fiscal'=> [675, 5]
            ],
            '023'=> [
                'quantidade_conhecimento' => [3, 4],
                'valor_total_conhecimento' => [7,14],
                'filler' => [22, 658],
            ]
        ];
    }

}