<?php

/**
 * @property Calculator calc
 */
class CalculatorTest extends PHPUnit_Framework_TestCase {

    /**
     *
     */
    public function setUp()
    {
        $this->calc = new Calculator;

    }

    /**
     *
     */
    public function testAddsNumbers()
    {
        $this->calc->setOperands(5);
        $this->calc->setOperation(new Addition);
        $result = $this->calc->calculate(); 

        $this->assertEquals(5, $result);
    }

    /**
     *
     */
    public function testMultipliesNumbers()
    {
        $this->calc->setOperands(3, 3, 3);
        $this->calc->setOperation(new Multiplication);
        $result = $this->calc->calculate(); 

        $this->assertEquals(27, $result);
    }
}
