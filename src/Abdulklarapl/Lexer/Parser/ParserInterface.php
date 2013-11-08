<?php

namespace Abdulklarapl\Lexer\Parser;

use Abdulklarapl\Lexer\Lexer;

/**
 * parser interface
 */
interface ParserInterface
{
    /**
     * @param string $stream
     * @return null
     */
    public function parse(Lexer &$lexer ,$token);

    /**
     * return true if token is matched to pattern
     * @param string $token
     *
     * @return boolean
     */
    public function match($token);

    /**
     * return name/id of parser
     *
     * @return string
     */
    public function getID();
}