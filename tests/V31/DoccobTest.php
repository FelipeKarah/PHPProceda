<?php

namespace Tests\V31;

use App\V30\Doccob;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotEmpty;

class DoccobTest extends TestCase
{

    /** @var string */
    private $file;

    /** @var App\V30\Doccob */
    private $parser;

    public function setUp():void
    {

        $this->file = <<<CONTENT
        000                                   33722100                           2406211107COB240611070                                                                           
        350COBRA240611070                                                                                                                                                         
        35112260426000325abcdefghijklmnopqrstuvwxyzabcdefghijklmno                                                                                                                 
        35200000002090   00002323661606202101072021000000002281304BCO00000000027375700000000000000000000000000000000000000Banco Itau Steel                   00000000000000000I   
        35300000002104          0484880000000002752980906202138717511000100594134720001198201275000014833210682012750000148570040000484881903918263                                                                           
        3541  0002241909062021305000000000002897500038717511000100                                                                                                                
        CONTENT;

        $this->parser = new Doccob;
    }

    public function testFileIsNotEmpty()
    {
        assertNotEmpty($this->file);
    }

    public function testEncode()
    {
        $content = $this->parser->decode(explode(PHP_EOL, $this->file));

        assertNotEmpty($content);
    }

    public function testTipoCobranca()
    {
        $content = $this->parser->decode(explode(PHP_EOL, $this->file));

        assertEquals("BCO", str_replace(" ", "", $content[3]["tipo_cobranca"]));
    }

    public function testDigitoVerificadorContaCorrrente()
    {
        $content = $this->parser->decode(explode(PHP_EOL, $this->file));

        assertEquals("00", str_replace(" ", "", $content[3]["digito_conta_corrente"]));
    }

    public function testDataDeVencimento()
    {
        $content = $this->parser->decode(explode(PHP_EOL, $this->file));

        assertEquals("01072021", str_replace(" ", "", $content[3]["data_vencimento"]));
    }

    public function testFilialEmissora()
    {
        $content = $this->parser->decode(explode(PHP_EOL, $this->file));

        assertEquals("0000000210", str_replace(" ", "", $content[4]["filial_emissora_documento"]));
    }
}