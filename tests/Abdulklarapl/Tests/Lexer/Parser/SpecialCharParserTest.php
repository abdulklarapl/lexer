<?php

namespace Abdulklarapl\Tests\Lexer\Parser;

use Abdulklarapl\Lexer\Parser\SpecialCharParser;

class SpecialCharParserTest extends ParserTest
{

    public function setUp()
    {
        $this->parser = new SpecialCharParser();
        $this->up();
    }

    public function testMatchCorrectValue()
    {
        $token = "_";
        $this->matchCorrectValue($token, SpecialCharParser::REGEX);
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testMatchIncorrectValue()
    {
        $token = ")";
        $this->matchIncorrectValue($token, SpecialCharParser::REGEX);
    }
}