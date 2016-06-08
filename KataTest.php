<?php

require 'kata.php';

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testBasic()
    {
        $this->assertEquals('211213', countMe('1123'));
    }

    public function testOneDigit()
    {
        $this->markTestSkipped();
        $this->assertEquals('11', countMe('1'));
    }

    public function testLongOne()
    {
        $this->markTestSkipped();
        $this->assertEquals('1221121113', countMe('211213'));
    }

    public function testLongOne()
    {
        $this->markTestSkipped();
        $this->assertEquals('', countMe('a123'));
    }


}
