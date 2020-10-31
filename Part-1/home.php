


<?php  

session_start();

$fullName=$_POST['full-name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['pass'];
$confirmPass=$_POST['confirm-pass'];
$phone=$_POST['phone'];
$birth=$_POST['birth'];
$ss=$_POST['social-security'];


$loginName=$_POST['log-username'];
$loginPassword=$_POST['log-pass'];


function login($ruser,$rpass, $luser,$lpass){
    if($luser!==$ruser || $lpass!==$rpass){
       echo "TRY AGAIN";
    }else
    {
        
        header("Location: safe.php");
    }
   }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
 background-color:rgb(136, 205, 245);
}      
</style>
</head>
<body>


<div style="display:flex;">
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on" id="inputs" style="display:grid;width:20%;padding:40px;margin:100px;border:1px solid grey;border-radius:20%;">
    <input type="text" name="full-name" placeholder="Full Name"><br>
    <input type="text" name="username" placeholder="Username"><br>
    <input type="email" name="email" placeholder="Email" autocomplete="off"><br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input type="password" name="confirm-pass" placeholder="Confirm your password"><br>
    <input type="tel" name="phone" placeholder="Phone"><br> 
    <input type="date" name="birth" placeholder="Birth-date"><br> 
    <input type="number" name="social-security" placeholder="Social Security"><br>
    <input type="submit">
    </form>
    

    
    <form method="post" action="safe.php" autocomplete="on" id="inputs" style="display:grid;width:30%;padding:40px;margin:100px;border:1px solid grey;border-radius:20%;">
    <input type="text" name="log-username" placeholder="Username"style="";><br>
    <input type="password" name="log-pass" placeholder="Password"><br>
    <input type="submit" value="Login" id="login">
    
</div>
</body>
</html>


<!--------------------------------------inputs------------------------------------------>
<?php
echo " --Your Name : ".$fullName."";
echo "<br>";
echo " --Your Username : ".$username;
echo "<br>";
echo " --Your Email : ".$email;
echo "<br>";
echo " --Your Password : ".$password;
echo "<br>";
echo " --Password Confirmation : ".$confirmPass;
echo "<br>";
echo " --Your Phone : ".$phone;
echo "<br>";
echo " --Your Social Security NB  : ".$ss;
echo "<br>"; ?>