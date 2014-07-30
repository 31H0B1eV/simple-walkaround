<?php

class Addition implements Operator {

    /**
     * @param $num
     * @param $current
     * @return mixed
     */
    public function run($num, $current)
    {
        return $current + $num;
    }
}