<?php

namespace App\V12;

use App\Proceda;

class Prefat extends Proceda
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
              'identificacao_intercambio' => [83, 12],
              'filler' => [95, 105],
            ],
            '390'=> [
              'identificacao_documento' => [3, 14],
              'filler' => [17, 183],
            ],
            '391'=> [
              'cnpj_cgc' => [3, 15],
              'inscricao_estadual' => [18, 5],
              'razao_social' => [33, 40],
              'filler' => [73, 127],
            ],
            '392'=> [
              'identificacao_pre_fatura' => [3, 20],
              'data_emissao' => [23, 8],
              'data_pagamento' => [31, 8],
              'quantidade_documentos' => [39, 4],
              'valor_total' => [43, 14],
              'acao_documento' => [58, 1],
              'filler' => [59, 141],
            ],
            '393'=> [
              'cgc_empresa_emissora' => [3, 15],//SEM EDIÇÃO (PONTOS E HÍFEN)
              'serie_documento' => [18, 5],
              'identificacao_documento' => [23, 20],
              'data_emissao_documento' => [43, 8],
              'serie_conhecimento' => [51, 5],
              'numero_conhecimento' => [56, 12], 
              'data_emissao_conhecimento' => [68, 8], 
              'cgc_origem_transporte' => [76, 15], //SEM EDIÇÃO (PONTOS E HÍFEN)
              'cgc_destino_transporte' => [91, 15], //SEM EDIÇÃO (PONTOS E HÍFEN)
              'identificacao_cgc_cnpj' => [106, 1],
              'valor_total_frete_embarcador' => [107, 14],
              'valor_total_frete_conhecimento' => [122, 14],
              'tipo_diferenca_valor' => [137, 1],
              'valor_diferenca_fretes' => [138, 14],
              'identificacao_documento_ref_transporte' => [153, 15],
              'filler' => [168, 32],
            ],
            '394'=> [
                'valor_frete_peso_volume' => [3, 14],
                'valor_sec_cat' => [18, 14],
                'valor_irt' => [33, 14],
                'valor_pedagio' => [48, 14],
                'valores_diversos' => [63, 14],
                'valor_desconto' => [78, 14],
                'valor_ademe' => [93, 14],
                'perc_taxa_iss' => [18, 4],
                'valor_iss' => [113, 14],
                'base_calculo_icms' => [128, 14],
                'perc_taxa_icms' => [143, 4],
                'valor_icms' => [148, 14],
                'valor_frete_ad_valorem' => [163, 14],
                'valor_despacho' => [178, 14],
                'peso_transportado' => [193, 6],
            ],
            '396'=> [
                'nota_fiscal' => [3, 165,[
                    'serie' => [0, 3],
                    'numero' => [3, 8]
                ]],
                'filler' => [168, 31],
            ],
            '399'=> [
                'valor_total_pre_fat' => [3, 14],
                'quantidade_total_pre_fat' => [18, 14],
                'filler' => [33, 167],
            ]
        ];
    }

}