<!-- if elseif else conditionstatement -->
<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            
        $x=30;
        $y=20;

        if($x > $y) //x is greater than y. Return is True.
        {
            echo "X is greater than Y"; //the output is X is greater than Y
        } 
 ?>
 <br>
 <?php
        $a=5;
        $b=10;
        if($a > $b) // a is smaller than y so return is false. The first condition is not work.
        {
            echo "A is greater then B";
        }
        else{
            echo "A is smaller than B";
        }
?>
<br>
<?php
        $x=10;
        $y=20;
        if($x > $y) // x is greater than Y so return is flase. The first condion is not work and go to second.
        {
            echo "X is greater than Y";
        }
        elseif($x == $y) // x is equal to y so reutrn is flase. The condition is not work the another condition. 
        {
            echo "X is equal to Y";
        }
        else    // else has not condition so the system is display this statement.
        {
            echo " X is smaller than Y";
        }
?>
<br>
<?php
        $x=20;
        switch($x)
        {
            case 10: echo "x is 10";
            break;// you need to use break in all condition. 
            case 20: echo "x is 20";
            break; // the system is work the another sentences if you don't use break.
            case 30: echo "x is 30";
            break;
            default :echo "Nothing"; // default method is for non of these are not similar.
        }
        // the output is only 20 because x is equal to 20 and use break so, the condition is break and don't work
        // another sentences. If there is no equal the default method is.
?>
</body>
</html>