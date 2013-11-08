<?php

require_once __DIR__."/../vendor/autoload.php";

$parsers = array(
    new \Abdulklarapl\Lexer\Parser\SpecialCharParser(),
    new \Abdulklarapl\Lexer\Parser\WordParser()
);
$parser = new \Abdulklarapl\Lexer\Parser($parsers);
$lexer = new \Abdulklarapl\Lexer\Lexer($parser);

var_dump($lexer->parse('This is simple test for lexer, which should return array of tokens - in this case - words'));