<!-- Question 5: Reverse Integer 
Write a program that takes an integer as input and returns an integer with reversed digit 
ordering. 
Examples: 
For input 500, the program should return 5. 
For input -56, the program should return -65. 
For input -90, the program should return -9. 
For input 91, the program should return 19.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 5</title>
</head>
<body>
    <form action="question_five.php" method="post">
        Enter Integer to reverse: <input type="number" name="num" ><br />
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $num=$_POST['num'];
        
        if($num<1){
            $negative=true;
        }else{
            $negative=false;
        }

        $num=strval($num);
        $num=strrev($num);
        $num=intval($num);

        if($negative){
            $num=-$num;
        }

        echo $num;
    }
?>