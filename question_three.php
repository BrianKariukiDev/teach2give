<!-- Question 3: Power of Two 
Write a program that takes an integer as input and returns true if the input is a power of two. 
Examples:  
8=> returns true 
6=> returns false  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
</head>
<body>
    <form action="question_three.php" method="post">
        Enter Integer: <input type="number" name="num" ><br />
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $num=$_POST['num'];
        
        function CheckPower($num){
            if($num==0){
                return 0;
            }
            while($num!=1){
                if($num%2 != 0){
                    return 0;
                }
                $num=$num/2;
            }
            return 1;
        }

        if(CheckPower($num)){
            echo "True";
        }else{
            echo "False";
        }
    }
?>