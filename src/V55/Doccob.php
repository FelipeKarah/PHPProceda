<?php

namespace FCunha\V55;

use FCunha\Proceda;

class Doccob extends Proceda
{
    public function __construct()
    {
        $this->setConfig();
    }

    private function setConfig()
    {
        $this->config = [
            '000' => [
                'remetente' => [3, 35],
                'destinatario' => [38, 35],
                'data' => [73, 6],
                'hora' => [79, 4],
                'arquivo' => [83, 12],
                'filler' => [95, 75],
              ],
            '550'=>[
                'identificacao_documento' => [3, 14],
                'filler' => [17, 153],
            ],
            '551'=> [
                'cgc' => [3, 14],
                'razao_social' => [17, 40],
                'filler' => [57, 113],
            ],
            '552'=> [
                'filial_emissora' => [3, 10],
                'tipo_documento_cobranca' => [13, 1],
                'serie_documento_cobranca' => [14, 3],
                'numero_documento_cobranca' => [17, 10],
                'data_emissao' => [27, 8],
                'data_vencimento' => [35, 8],
                'valor_documento_cobranca' => [43, 142],
                'tipo_cobranca'=> [58, 3],
                'valor_total_icms' => [61, 14],
                'juros_atraso' => [76, 14],
                'data_limite' => [91, 8],
                'valor_desconto' => [99, 14],
                'identificacao_agente_cobranca' => [114, 35],
                'agencia_bancaria' => [149, 4],
                'digito_agencia' => [153, 1],
                'conta_corrente' => [154, 10],
                'digito_conta_corrente' => [164, 2],
                'acao_documento' => [166, 1],
                'filler' => [167, 3],
            ],
            '553'=> [
                'filial_emissora_documento' => [3, 10],
                'serie_conhecimento' => [13, 5],
                'numero_conhecimento' => [18, 12],
                'valor_frete' => [30, 14],
                'data_emissao_conhecimento' => [45, 8],
                'cgc_remetente_nf' => [53, 14], //SEM EDI????O (PONTOS E H??FEN)
                'cgc_destinatario_nf' => [67, 14], //SEM EDI????O (PONTOS E H??FEN)
                'cgc_emissor_conhecimento' => [81, 14], //SEM EDI????O (PONTOS E H??FEN)
                'filler' => [95, 75]
            ],
            '554'=> [
                'serie' => [3, 3],
                'nota_fiscal' => [6, 8],
                'data_emissao' => [14, 8],
                'peso_nota_fiscal' => [22, 6],
                'valor_mercadoria' => [29, 14],
                'cgc_emissor_nota_fiscal' => [44, 14],
                'filler' => [58, 112],
            ],
            '555'=> [
                'quantidade_total_cobrancas' => [3, 4],
                'valor_total_cobrancas' => [7, 14],
                'filler' => [22, 148],
            ],
        ];
    }

}