<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Check if Number is a palindrome</h2> 
  <form method="POST" action= "index.php"> 
    Enter Word: 
    <input type="text" name="word" >
    <br>
    <input type="submit" name="submit" value="Submit"> 
  </form> 
</body>
</html>

<?php
if (isset($_POST["word"])) {
    $str = $_POST["word"];
    $strLen = strlen($str) - 1;
    $reverse = '';

    for ($i = $strLen; $i >= 0; $i--) {
        $reverse.=$str[$i];
    }
    if ($reverse === $str) {
        echo 'you inputted a Palindrome';
    } else {
        echo "you inputted was not a Palindrome";
    }
}
?>