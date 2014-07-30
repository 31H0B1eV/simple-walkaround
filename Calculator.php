<?php

class Calculator {

    /**
     * @var int
     */
    protected $result = 0;
    /**
     * @var array
     */
    protected $operands = [];
    /**
     * @var
     */
    protected $operation;

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     *
     */
    public function setOperands()
    {
        $this->operands = func_get_args();
    }

    /**
     * @param Operator $operation
     */
    public function setOperation(Operator $operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return int
     * @throws InvalidArgumentException
     */
    public function calculate()
    {
        foreach ($this->operands as $num)
        {
            if ( ! is_numeric($num) )
                throw new InvalidArgumentException;

            $this->result = $this->operation->run($num, $this->result);
        }

        return $this->result;
    }
}
