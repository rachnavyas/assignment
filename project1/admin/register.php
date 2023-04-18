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
            <tr>
                <td>Name:
                <td><input type="text" name="name" value="<?php echo $se->name;?>">
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo $se->email;?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td> <input type="password" name="pwd" value="<?php echo $se->pwd;?>"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male"
                <?php
                $g=$se->gender;
                if($g=="male")
                {
                    echo"checked='checked'";

                }?>
                >Male

                    <input type="radio" name="gender" value="female"
                    <?php
                    if($g=="female")
                    {
                        echo"checked='checked'";
    
                    }?>
                    >Female
                </td>
            </tr>
            <tr>
                <td>Language:</td>
                <td><input type="checkbox" value="gujrati" name="chk[]"
                <?php
                $chk=$se->lan;
                $h=explode(",",$chk);
                if(in_array("gujrati",$h))
                {
                    echo "checked='checked'";
                }
                ?>>gujrati
                    <input type="checkbox" value="english" name="chk[]"
                     <?php
                $chk=$se->lan;
                $h=explode(",",$chk);
                if(in_array("english",$h))
                {
                    echo "checked='checked'";
                }
                ?>>english
                </td>
            </tr>
            <tr>
                <td>Country:
                <td><select name="country">
                        <option value="">Select
                        </option>
                        <?php
                          foreach($data as $c)
                          {
                            if($c->cid==$se->country)
                            {

                            
                        ?>
                        <option value="<?php echo $c->cid;?>" selected="selected">
                            <?php echo $c->cname;
                            ?></option>
                        <?php
                        }
                        else
                        {?>
                            <option value="<?php echo $c->cid;?>"><?php echo $c->cname;?></option>
                        <?php
                        }
                    }
                    ?>
                    </Select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="update" value="Update">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>