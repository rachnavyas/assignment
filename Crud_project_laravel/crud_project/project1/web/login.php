<?php
if(isset($_COOKIE['user']))
{
    $user=$_COOKIE['user'];
    echo $user;
}
else
{
    $user="";  
}
if(isset($_COOKIE['pwd']))
{
    $pwd=$_COOKIE['pwd'];
    //echo $pwd;
}
else
{
    $pwd="";  
}
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
    <form method="post">
    <table border="1" align="center">
        <tr><td>Email:</td>
        <td><input type="text" name="email" value="<?php echo $user?>"></td>
    </tr>
    <tr><td>Password:</td>
    <td> <input type="password" name="pwd" value="<?php echo $pwd?>"></td></tr>
    <tr><td colspan="2">
        <input type="checkbox" name="remember">Remember Me</td></tr>
    <tr><td colspan="2" align="center">
        <input type="submit" name="login" value="login"></td>
</tr>
    </table>
</form>
</body>
</html>