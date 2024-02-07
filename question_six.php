

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
</head>
<body>
    <form action="question_six.php" method="post">
        Enter The Sentence: <input type="text" name="text" ><br />
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $text=$_POST['text'];
        $text=strtolower($text);
        
        $a=0;
        $e=0;
        $i=0;
        $o=0;
        $u=0;

        for($j=0;$j<strlen($text);$j++){
            $char=$text[$j];
            if($char=="a"){
                $a=1;
            }elseif($char=="e"){
                $e=1;
            }elseif($char=="i"){
                $i=1;
            }elseif($char=="o"){
                $o=1;
            }elseif($char=="u"){
                $u=1;
            }
        }

        $total=$a+$e+$i+$o+$u;
        echo $total;

    }
?>