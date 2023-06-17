<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script>
    function getdata(e)
    {
        $.ajax({
            type:'post',
            url:'state',
            data:{sid:$('#country').val()},
            success:function(Response)
            {
                //alert(Response);
                $('#state').html(Response);
            }
        })
    }</script>
</head>

<body>
    <form method="post">

        <table border="1" align="center">
            <tr>
                <td>Name:
                <td><input type="text" name="name">
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td> <input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><textarea name="address"></textarea></td>
             </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <td>Language:</td>
                <td><input type="checkbox" value="gujarati" name="chk[]">Gujarati
                    <input type="checkbox" value="english" name="chk[]">English
                </td>
            </tr>
            <tr>
                <td>Country:
                <td><select name="country" id="country" onchange="getdata(this)">
                    <?php
                    foreach($data as $d){?>
                        <option value="<?php echo $d->cid?>">
                        <?php echo $d->cname?></option>
                  <?php  }?>
                                  
                    
                </td>
            </tr>
            <tr>
            <td>state:
                <td><select name="state" id="state">
                    <option value="">
                    </select>
                    </td>
                    </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Register">
                </td>
            </tr>

        </table>
    </form>
    <br><br>
</body>

</html>