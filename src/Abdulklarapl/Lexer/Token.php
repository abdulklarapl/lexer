<?php

namespace Abdulklarapl\Lexer;

/**
 * Token entity
 */
class Token
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $stream;

    /**
     * @var string
     */
    private $regex;

    /**
     * @param string $id
     * @param string $stream
     * @param string $regex
     */
    public function __construct($id, $stream, $regex)
    {
        $this->setId($id);
        $this->setStream($stream);
        $this->setRegex($regex);
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $regex
     */
    public function setRegex($regex)
    {
        $this->regex = $regex;
    }

    /**
     * @return string
     */
    public function getRegex()
    {
        return $this->regex;
    }

    /**
     * @param string $stream
     */
    public function setStream($stream)
    {
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