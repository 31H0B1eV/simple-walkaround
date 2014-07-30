<?php

class Multiplication implements Operator {

    /**
     * @param $num
     * @param $current
     * @return mixed
     */
    public function run($num, $current)
    {
        if ($current === 0) return $num;

        return $current * $num;
    }
}