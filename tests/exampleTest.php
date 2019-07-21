<?php
use Pholmes\example;
use PHPUnit\Framework\TestCase;

class exampleTest extends TestCase
{
    /**
     * @test
     */
    public function getWordCorrect() :void
    {
        $example = new example;
        $this->assertEquals('hello world', $example->hello('world'));
    }
}
