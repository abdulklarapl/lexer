<?php

namespace Abdulklarapl\Lexer\Parser;
use Abdulklarapl\Lexer\Token;
use Abdulklarapl\Lexer\Lexer;

/**
 * parser for special chars
 */
class SpecialCharParser implements ParserInterface
{

    const REGEX = "/([-._=+])/";

    /**
     * @param Lexer $lexer
     * @param $token
     * @return Token
     *
     * @throws \RuntimeException
     */
    public function parse(Lexer &$lexer, $token)
    {
        if (!$this->match($token)) {
            throw new \RuntimeException("Token dosn't match!");
        }

        $token = new Token($this->getID(), $token, self::REGEX);
        return $token;
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
        return "special_char";
    }
}