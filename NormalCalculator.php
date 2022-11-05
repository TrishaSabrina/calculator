<?php

require('Calculator.php');
class NormalCalculator extends Calculator{
    /*public $num1=0;
  public $num2=0;  onnno way te kra jay*/ 
public function __construct($number1,$number2){
  
public function __construct($number1,$number2){


    parent ::__construct($number1,$number);
    
    
    


}

public function calculate($sign){
    $result = 0;
switch($sign){
    case $sign === '+':
        $result= $this->sum();
        break;
        case $sign === '-':
            $result= $this->sub();
            break;

            case $sign === '*':
                $result= $this->mul();
                break;

                case $sign=== '/':
                    $result= $this->div();
                    break;
                    default:
                    $result=0;

}


    /*     
    etar bodole switch case o use kora jay

    if($sign === '+'){

        //$result=$calObject->sum($num1,$num2);
        $result=$this->sum();
    
    }
    elseif($sign === '*'){
        //$result=$calObject-> mul($num1,$num2);
        $result=$this-> mul();
    
    }
    elseif($sign === '-'){
        //$result=$calObject-> sub($num1,$num2);
        $result=$this-> sub();
    }
    elseif($sign === '/'){
        //$result=$calObject-> div($num1,$num2);
        $result=$this-> div();
    }
*/
    
}


/*function div($n1,$n2){
    function div(){
    return $this-> num1 / $this-> num2;
    }

function sub($n1,$n2){
    function sub(){
    return  $this->num1 -  $this->num2;
    }

function mul($n1,$n2){
    function mul(){
    return  $this->num1 * $this->num2;
    }

function sum($n1,$n2){
    function sum(){
return  $this->num1 + $this->num2;
}*/

}
return $result;
}