<?php

namespace Abdulklarapl\Tests\Lexer\Parser;

use Abdulklarapl\Lexer\Parser\ParserInterface;
use Abdulklarapl\Lexer\Token;
use Abdulklarapl\Lexer\Lexer;
use Abdulklarapl\Lexer\Parser;

abstract class ParserTest extends  \PHPUnit_Framework_TestCase
{

    /**
     * @var ParserInterface
     */
    protected $parser;

    /**
     * @var Lexer
     */
    protected $lexer;

    protected function up()
    {
        $parser = new Parser();
        $this->lexer = new Lexer($parser);
    }

    protected function matchCorrectValue($token, $regex)
    {
        $expectedToken = new Token($this->parser->getID(), $token, $regex);

        $this->assertTrue($this->parser->match($token));
        $this->assertEquals($expectedToken, $this->parser->parse($this->lexer, $token));
    }

    protected function matchIncorrectValue($token, $regex)
    {
        $expectedToken = new Token($this->parser->getID(), $token, $regex);

        $this->assertFalse($this->parser->match($token));
        $this->assertEquals($expectedToken, $this->parser->parse($this->lexer, $token));
    }
}