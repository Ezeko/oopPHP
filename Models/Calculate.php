<?php

class Calculate {
    protected $firstNum,
    $secondNum,
    $action;

    public function __construct( $firstNum, $secondNum, $action)
    {
        switch ($action) {
            case ('+'): $this->result = $firstNum + $secondNum;
            break;
            case ('-'): $this->result = $firstNum - $secondNum;
            break;
            case ('*'): $this->result = $firstNum * $secondNum; 
            break;
            default:  $this->result = $firstNum / $secondNum; break;
        }

    }

    public function __destruct()
    {
        echo ("Result is {$this->result}");
    }

}