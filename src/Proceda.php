<?php

namespace FCunha;

abstract class Proceda implements IProceda
{
    /** @var array */
    protected $config;

    public final function getConfig():array
    {
        return $this->config;
    }   

    public final function decode(array $file):array
    {
        $result = [];
        
        // Percorre o arquivo fornecido
        foreach($file as $line){

            // Extrai a identificação da linha corrente
            $identificacao = substr($line, 0, 3);

            // Verifica se a identificação obtida existe nas configurações do documento
            if(!array_key_exists($identificacao, $this->config)){
                continue;
            }

            // Percorre cada item da configuração
            $content = array_map(function($item) use($line){ 
                
                // Extrai a informação com base no posicionamento
                $current = substr($line, $item[0], $item[1]);

                // Extrai as subconfigurações se existir
                $subConfig = $item[2] ?? [];
                
                // Se não existir subconfigurações, retorna o conteúdo extraído
                if(empty($subConfig)){
                    return $current;
                }

                // Calcula o comprimento de cada grupo
                $total = array_reduce($subConfig, fn($acc, $cur) => $acc + $cur[1], 0);
                
                // Quebra a string estraída em grupos
                $groups = str_split($current, $total);
                
                // Para cada grupo, extrai as informações
                $current = array_map(function($group) use($subConfig){

                    if(empty(str_replace(' ', '', $group))){
                        return;
                    }

                    return array_map(fn($config) => substr($group, $config[0], $config[1]), $subConfig);
               
                }, $groups);

                // Remove itens vazios
                return array_filter($current);

            }, $this->config[$identificacao]);

            $result[] = $content; 
        
        }

        return $result;
    }

    public final function encode(array $params, array $config = []):string
    {
        // Extrai os identificadores
        $identificadores = array_keys($config ?? $this->config);
        
        // Calcula o tamanho da string
        $total = array_map(fn($config) => array_reduce($config, fn($acc , $cur) => $acc += $cur[1], 0 ), $this->config);
        
        $result = [];

        // Itera através dos parâmetros fornecidos
        foreach($params as $param){
            
            foreach($identificadores as $identificador){
                
                $line = str_repeat(' ', $total[$identificador]);
                
                foreach($this->config[$identificador] as $key => $value){

                    if(!in_array($key, array_keys($param))){
                        continue;
                    }
        
                    $valor = $param[$key];
                    $posicaoInicial = $value[0];
                    $tamanho = $value[1];
                    $line = substr_replace($line, $valor, $posicaoInicial, $tamanho);  

                }

                $line = substr_replace($line, $identificador, 0, 3);  
                
                $result[] = $line;
            
            }

            return implode(PHP_EOL, $result);
        }
    }
}