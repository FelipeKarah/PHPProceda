<?php

namespace App\V31;

use App\Proceda;

class Notfis extends Proceda
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
                'filler' => [95, 145],
            ],
            '310'=> array(
                'identificacao_documento' => [3, 14],
                'filler' => [17, 223],
            ),
            '311'=> array(
                'cgc' => [3, 14],
                'inscricao_estadual_embarcadora' => [17, 15],
                'endereco_logradouro' => [32, 40],
                'cidade' => [72, 35],
                'cod_postal' => [107, 9],
                'subentidade_pais' => [116, 9],
                'data_embarque' => [125, 8],
                'nome_empresa_embarcadora' => [133, 40],
                'filler' => [173, 67],
            ),
            '312' => array(
                'razao_social' => [3, 40],
                'cgc_cpf' => [43, 14],
                'inscricao_estadual' => [57, 15],
                'endereco' => [72, 40],
                'bairro' => [112, 20],
                'cidade' => [132, 35],
                'cep' => [167, 9],
                'cod_municipio' => [176, 9],
                'uf' => [185, 9],
                'area_frete' => [194, 4],
                'p_fone_res' => [198, 35],
                'identificacao_destinatario' => [233, 1],
                'filler' => [234, 6],
            ),
            '313' => array(
                'num_romaneio' => [3, 15],
                'cod_rota' => [18, 7],
                'meio_transporte' => [25, 1],
                'tipo_transporte' => [26, 1],
                'tipo_carga' => [27, 1],
                'condicao_frete' => [28, 1],
                'serie_nf' => [29, 3],
                'numero_nf' => [32, 8],
                'data_emissao' => [40, 8],
                'natureza_tipo' => [48, 15],
                'especie_acondicionamento' => [63, 15],
                'qtd_volumes' => [78, 6],
                'valor_nota' => [85, 14],
                'peso_total' => [100, 6],
                'peso_densidade_cubagem' => [107, 4],
                'tipo_icms' => [112, 1],
                'seguro_efetuado' => [113, 1],
                'valor_seguro' => [114, 14],
                'valor_cobrado' => [129, 14],
                'numero_placa' => [144, 7],
                'plano_carga_rapida' => [151, 1],
                'valor_frete_peso_volume' => [152, 14],
                'valor_ad_valoragem' => [167, 14],
                'valor_total_taxas' => [182, 14],
                'valor_total_frete' => [197, 14],
                'acao_documento' => [212, 1],
                'valor_icms' => [214, 11],
                'valor_icms_retido' => [225, 11],
                'indicacao_bonificacao' => [237, 1],
                'chave_acesso' => [238, 44]
            ),
            '314' => array(
                'quantidade_volumes' => [3, 6],
                'especie_acondicionamento' => [10, 15],
                'mercadoria_nf' => [25, 30],
                'quantidade_volumes' => [55, 6],
                'especie_acondicionamento_2' => [62, 15],
                'mercadoria' => [77, 30],
                'quantidade_volumes_2' => [107, 6],
                'especie_acondicionamento_3' => [114, 15],
                'mercadoria_nota_ficasl' => [129, 30],
                'quantidade_volume' => [159, 6],
                'especie_acondicionamento' => [166, 15],
                'mercadoria_nota_fiscal' => [181, 30],
                'filler' => [211, 29],
            ),
            '315' => array(
                'razao_social' => [3, 40],
                'cgc' => [43, 14],
                'inscricao_estadual' => [57, 15],
                'endereco' => [72, 40],
                'bairro' => [112, 20],
                'cidade' => [132, 35],
                'codigo_postal' => [167, 9],
                'codigo_municipio' => [176, 9],
                'subentidade_pais' => [185, 9],
                'numero_comunicacao' => [194, 35],
                'filler' => [229, 11],
            ),
            '316' => array(
                'razao_social' => [3, 40],
                'cgc' => [43, 14],
                'inscricao_estadual' => [57, 15],
                'endereco' => [72, 40],
                'bairro' => [112, 20],
                'cidade' => [132, 35],
                'cep' => [167, 9],
                'cod_municipio' => [176, 9],
                'subentidade_pais' => [185, 9],
                'area_frete' => [194, 4],
                'numero_comunicacao' => [198, 35],
                'filler' => [233, 7],
            ),
            '317' => array(
                'razao_social' => [3, 40],
                'cgc' => [43, 14],
                'inscricao_estadual' => [57, 15],
                'endereco' => [72, 40],
                'bairro' => [112, 20],
                'cidade' => [132, 35],
                'cep' => [167, 9],
                'cod_municipio' => [176, 9],
                'subentidade_pais' => [185, 9],
                'numero_comunicacao' => [194, 35],
                'filler' => [229, 11],
            ),
            '318' => array(
                'valor_total_notas_fiscais' => [3, 14],
                'peso_total_notas_fiscais' => [18, 14],
                'peso_total_densidade_cubagem' => [33, 14],
                'quantidade_total_volumes' => [48, 14],
                'valor_total_cobrado' => [63, 14],
                'valor_total_seguro' => [78, 14],
                'filler' => [93, 147],
            ),
            '333' => array(
                'codigo' => [3, 4],
                'tipo_periodo' => [7, 1],
                'data_inicial_entrega' => [8, 8],
                'hr_inicial_entrega' => [16, 4],
                'data_final_entrega' => [20, 8],
                'hr_final_entrega' => [28, 4],
                'local_desembarque' => [32, 15],
                'calculo_frete_diferenciado' => [47, 1],
                'identificacao_tabela_frete' => [48, 10],
                // dados entrega casada (outras nf 1)
                'cgc_emissor_nf_a_ser_entregue' => [58, 15],
                'serie_nf' => [73, 3],
                'nf' => [76, 8],
                // dados entrega casada (outras nf 2)
                'cgc_emissor_nf_a_ser_entregue_2' => [84, 15],
                'serie_nf_2' => [99, 3],
                'nf_2' => [102, 8],
                // dados entrega casada (outras nf 3)
                'cgc_emissor_nf_a_ser_entregue_3' => [110, 15],
                'serie_nf_3' => [125, 3],
                'nf_3' => [128, 8],
                // dados entrega casada (outras nf 3)
                'cgc_emissor_nf_a_ser_entregue_4' => [136, 15],
                'serie_nf_4' => [151, 3],
                'nf_4' => [154, 8],
                // dados entrega casada (outras nf 3)
                'cgc_emissor_nf_a_ser_entregue_4' => [162, 15],
                'serie_nf_4' => [177, 3],
                'nf_4' => [180, 8],
                'valor_despesa_adicional_transporte' => [188, 14],
                'tipo_veiculo' => [203, 5],
                'filial_emissao_conhecimento_contratante' => [208, 10],
                'serie_conhecimento' => [218, 5],
                'numero_conhecimento' => [223, 12],
                'filler' => [235, 5],
            )
        ];
    }

}