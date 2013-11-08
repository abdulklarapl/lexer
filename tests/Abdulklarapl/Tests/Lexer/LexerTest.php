<?php

namespace Abdulklarapl\Tests\Lexer;

use Abdulklarapl\Lexer\Lexer;

class LexerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Lexer
     */
    private $lexer;

    public function setUp()
    {
        $parsers = array(
            new \Abdulklarapl\Lexer\Parser\SpecialCharParser()
        );
        $parser = new \Abdulklarapl\Lexer\Parser($parsers);
        $this->lexer = new \Abdulklarapl\Lexer\Lexer($parser);
    }

    public function testParse()
    {
        $expectedParsingResult = 'a:7:{i:0;N;i:1;N;i:2;O:24:"Abdulklarapl\\Lexer\\Token":3:{s:28:"Abdulklarapl\\Lexer\\Tokenid";s:12:"special_char";s:32:"Abdulklarapl\\Lexer\\Tokenstream";s:1:"-";s:31:"Abdulklarapl\\Lexer\\Tokenregex";s:11:"/([-._=+])/";}i:3;O:24:"Abdulklarapl\\Lexer\\Token":3:{s:28:"Abdulklarapl\\Lexer\\Tokenid";s:12:"special_char";s:32:"Abdulklarapl\\Lexer\\Tokenstream";s:1:".";s:31:"Abdulklarapl\\Lexer\\Tokenregex";s:11:"/([-._=+])/";}i:4;O:24:"Abdulklarapl\\Lexer\\Token":3:{s:28:"Abdulklarapl\\Lexer\\Tokenid";s:12:"special_char";s:32:"Abdulklarapl\\Lexer\\Tokenstream";s:1:"-";s:31:"Abdulklarapl\\Lexer\\Tokenregex";s:11:"/([-._=+])/";}i:5;N;i:6;N;}';
        $serializedResult = str_replace("\0", "", serialize($this->lexer->parse('q ( - . - ) p')));

        $this->assertEquals($expectedParsingResult, $serializedResult);
    }
}
