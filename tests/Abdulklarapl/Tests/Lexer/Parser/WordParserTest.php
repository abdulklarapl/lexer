<?php

namespace Abdulklarapl\Tests\Lexer\Parser;

use Abdulklarapl\Lexer\Parser\WordParser;

class WordCharParserTest extends ParserTest
{

    public function setUp()
    {
        $this->parser = new WordParser();
        $this->up();
    }

    public function testMatchCorrectValue()
    {
        $token = "_";
        $this->matchCorrectValue($token, WordParser::REGEX);
    }
}