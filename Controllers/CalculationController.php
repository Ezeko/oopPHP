<?php
require_once ('../Models/Calculate.php');
//get input
class CalculationController {
    public function __construct()
    {
        $firstNum = $_POST['num1'];
        $secondNum = $_POST['num2'];
        $action = $_POST['operation'];
    
        return new Calculate($firstNum, $secondNum, $action);
    }

}
