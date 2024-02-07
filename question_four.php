<!-- Question 4: Capitalize Words 
Write a program that accepts a string as input, capitalizes the first letter of each word in the 
string, and then returns the result string. 
Examples:  
"hi"=> returns "Hi" 
"i love programming"=> returns "I Love Programming"  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
</head>
<body>
    <form action="question_four.php" method="post">
        Enter The String: <input type="text" name="text" ><br />
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $text=$_POST['text'];
        $text=ucwords($text);

        echo $text;
    }
?>