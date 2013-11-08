<?php

namespace Abdulklarapl\Lexer;

/**
 * Class running lexical analysis for input
 */
class Lexer
{
    const DELIMITER = " ";

    /**
     * @var array
     */
    private $token = array();

    /**
     * @var Parser
     */
    private $parser;

    /**
     * @var integer
     */
    private $position = 0;

    /**
     * @var integer
     */
    private $length;

    /**
     * @var int
     */
    private $space;

    /**
     * @var string
     */
    private $stream;

    /**
     * @param ParserInterface $parser
     */
    public function __construct(ParserInterface $parser)
    {
        $this->parser = $parser;
        $this->space = strlen(self::DELIMITER);
    }

    /**
     * do lexical analysis
     *
     * @param string $input
     * @return array
     */
    public function parse($input)
    {
        $this->setStream($input);
        $elements = explode(' ', $this->stream);

        while($this->position < $this->length) {
            $spacePosition = strpos($this->stream, self::DELIMITER);
            if ($spacePosition == false) {
                $spacePosition = $this->length;
            }
            $element = substr($this->stream, 0, $spacePosition);

            $parsed = $this->parser->parse($this, $element);
            $this->token[] = $parsed;

            $this->position += strlen($element);
            $this->position += $this->space;

            if ($spacePosition > 0) {
                $this->stream = substr($this->stream, $spacePosition+$this->space);
                continue;
            }
        }

        return $this->token;
    }

    /**
     * @param integer $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @param string $stream
     */
    public function setStream($stream)
    {
        $this->length = strlen($stream);
        $this->stream = $stream;
    }

    /**
     * @return string
     */
    public function getStream()
    {
        return $this->stream;
    }
}