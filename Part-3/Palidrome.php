<?php 
//echo "reverse word ".strrev($str);
function palidrome($str){
    if(strrev($str)==$str){
        return 1;
    }else{
        return 0;
    }}


if(isset($_POST['submit'])){
    $str=strtolower($_POST['word']);
    
    
       if(palidrome($str)){
echo 'Palindrome';

}else {
    echo 'Not a Palidrome';
    }}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($SERVER_["PHP_SELF"])?>">
        <input type="text" name="word" placeholder="Enter a Word">
        <input type="submit" name='submit' value="run">
        
    </form>
</body>
</html>