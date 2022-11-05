<?php
//include('Calculator.php');
require('NormalCalculator.php');
//echo "<pre>";
//print_r($_POST);
$num1= $_POST['number1'];
$num2= $_POST['number2'];

 /*echo "<pre>";
print_r($_GET);
$result= $_GET['number1']+ $_GET['number2'];
echo "</pre>";

echo "<pre>";
print_r($_POST);
$result= $_POST['number1']+ $_POST['number2'];
echo "</pre>";

$a=8;
$b= 0;
/*if($a==7){

    $b=3;
}else{
    $b=9;
} 
echo $b; ....etar bodole likha jay ekta single line e*

$b=($a==7)? 3 : 9;

echo $b;
exit;


/*function div($n1,$n2){
    return $n1/ $n2;
    }

function sub($n1,$n2){
    return $n1- $n2;
    }

function mul($n1,$n2){
    return $n1* $n2;
    }

function sum($n1,$n2){
return $n1+ $n2;
}
$result = sum($num1,$num2);

*/

$sign = $_POST['operator'];
$calObject=new NormalCalculator($num1,$num2);
$result =$calObject->calculate($sign);



/*if($sign === '+'){

    //$result=$calObject->sum($num1,$num2);
    $result=$calObject->sum();

}
elseif($sign === '*'){
    //$result=$calObject-> mul($num1,$num2);
    $result=$calObject-> mul();

}
elseif($sign === '-'){
    //$result=$calObject-> sub($num1,$num2);
    $result=$calObject-> sub();
}
elseif($sign === '/'){
    //$result=$calObject-> div($num1,$num2);
    $result=$calObject-> div();
}
echo "</pre>";*/

?>

<!DOCTYPE html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Calculator </title>
    <body>                                                                                                                           
                                                                                                                 
<div class="container">
    <div class = "row">
        <div class ="col-md-6 offset-md-3">
        <div class="card card-success mt-5">
<div class="card-header">
    <!-- Calculator-->
    Result:<?php echo $result;?>
</div> 

<div class ="card-body"> 
     <!-- <form action="" method="GET">-->
     <!--<form action="action.php" method="POST">-->
     <form action="" method="POST">
        <div class="form-group">
            <label>Number 1<br><label>
                <input type ="text" name="number1" value="<?= $_POST['number1']?>" class ="form control">
        </div> 
        <div class="form-group">
            <label>Number 2<br><label>
                <input type ="text" name="number2"  value="<?= $_POST['number2']?>" class ="form control">
        </div> 

        <div class="form-group">
            <label>Operator<br><label>
                <select name ="operator" id="" class ="form control">
                    <option <?php echo ($_POST['operator']=='+') ? 'selected': '' ?> value="+">+</option>
                    <option <?php echo ($_POST['operator']=='-') ? 'selected': '' ?>  value="-">-</option>
                    <option <?php echo ($_POST['operator']=='/') ? 'selected': '' ?> value="/">/</option>
                    <option  <?php echo ($_POST['operator']=='*') ? 'selected': '' ?> value="*">*</option>
       </select>
        </div> 

        <div class="form-group">
             <!--   <input type ="submit" class ="btn btn-warning" value= "Sum">-->
             <input type ="submit" class ="btn btn-warning" value= "Calculate">  
        </div> 

        </form>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
</div>
</div>
        </div>
</div>
    </body>
</head>





                                                                                                                                                                                                                                                                                                      
</html>