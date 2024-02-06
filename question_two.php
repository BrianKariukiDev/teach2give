<!-- Question 2: Fibonacci Sequence 
Write a program to generate the Fibonacci sequence up to 100. -->

<?php
    $num1=0;
    $num2=1;
    $fibonacci= $num1+$num2;
    echo $num1." ".$num2." ".$fibonacci . " ";

    while($fibonacci<=100){
        $num1=$num2;
        $num2=$fibonacci;
        $fibonacci=$num1+$num2;

        echo $fibonacci ." ";
    }
?>