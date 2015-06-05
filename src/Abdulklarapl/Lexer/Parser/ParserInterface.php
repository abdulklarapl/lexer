<?php

namespace Abdulklarapl\Lexer\Parser;

use Abdulklarapl\Lexer\Lexer;

/**
 * parser interface
 */
interface ParserInterface
{
    /**
     * @param Lexer $lexer
     * @param string $token
     * @return mixed
     */
    public function parse(Lexer &$lexer ,$token);

    /**
     * @param Lexer $lexer
     * @param string $token
     * @return mixed
     */
    public function match(Lexer &$lexer, $token);

    /**
     * return name/id of parser
     *
     * @return string
     */
    public function getID();
}