<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Regitration Form Form</title>
    </head>
    <body>
       <form method="post" action="">
        @csrf
        <table align="center" border=1>
             <tr>
                <th colspan="2" align="center">Registration</th>
</tr>     
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id=""> 
            </tr> <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id=""> 
            </tr> 
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id=""> 
            </tr> 
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Register">
    </body>
    </html>