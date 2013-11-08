<?php

namespace Abdulklarapl\Lexer;

/**
 *
 */
class Parser implements ParserInterface
{

    /**
     * @var array
     */
    private $parser;

    public function __construct($parser = array())
    {
        $this->parser = $parser;
    }

    /**
     * @param Lexer $lexer
     * @param string $token
     * @return mixed
     */
    public function parse(Lexer &$lexer, $token)
    {
        foreach ($this->parser as $parser)
        {
            if ($parser->match($token)) {
                return $parser->parse($lexer, $token);
            }
        }
    }
}