<?php

namespace Abdulklarapl\Lexer\Parser;
use Abdulklarapl\Lexer\Token;
use Abdulklarapl\Lexer\Lexer;

/**
 * ultra simple parser for words
 */
class WordParser implements ParserInterface
{

    const REGEX = "/([^*])/";

    /**
     * @param Lexer $lexer
     * @param string $stream
     * @return null
     */
    public function parse(Lexer &$lexer, $token)
    {
        $tokenObject = new Token($this->getID(), $token, self::REGEX);
        return $tokenObject;
    }

    /**
     * @param Lexer $lexer
     * @param string $token
     * @return bool|mixed
     */
    public function match(Lexer &$lexer, $token)
    {
        return preg_match(self::REGEX, $token) > 0;
    }

    /**
     * @return string
     */
    public function getID()
    {
        return "word";
    }
}