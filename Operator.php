<?php

interface Operator {

    /**
     * @param $num
     * @param $current
     * @return mixed
     */
    public function run($num, $current);
}