<?php

class MultiplicationTest extends PHPUnit_Framework_TestCase {

    public function testFindMultiplicationOfNumbers()
    {
        $mult = new Multiplication;
        $result = $mult->run(5, 2);

        $this->assertEquals(10, $result);
    }
}
 