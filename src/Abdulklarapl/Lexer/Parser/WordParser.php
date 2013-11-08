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
     * @param string $token
     *
     * @return boolean
     */
    public function match($token)
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