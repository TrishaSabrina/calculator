<?php
class Calculator{

    public $num1=0;
  public $num2=0;
  
  public function __construct($number1,$number2){
    
    $this->num1= $number1;
    $this->num2= $number2;
    }
    protected function div(){
        return $this-> num1 / $this-> num2;
        }
    
    
        protected  function sub(){
        return  $this->num1 -  $this->num2;
        }
    
    
        protected   function mul(){
        return  $this->num1 * $this->num2;
        }
    
    
        protected  function sum(){
    return  $this->num1 + $this->num2;
    }
    
    



}