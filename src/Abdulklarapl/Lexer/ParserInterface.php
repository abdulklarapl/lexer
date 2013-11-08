<?php

namespace Abdulklarapl\Lexer;
use Abdulklarapl\Lexer\Lexer;

/**
 *
 */
interface ParserInterface
{

    /**
     * Parse token
     *
     * @param Lexer $lexer
     * @param string $token
     * @return mixed
     */
    public function parse(Lexer &$lexer, $token);
}