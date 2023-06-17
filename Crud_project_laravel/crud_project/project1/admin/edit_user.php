
 
        <center>
  
<form method="post" >
    <table border="1">
        <tr>
        <th colspan="2" align="center" style="font-size:20px ;">UPDATE</th></tr>
        <tr>
            <td>
    Name:</td><td><input type="text" name="name" value="<?php echo $d->name;?>"></td>

   <tr><td> Email:</td><td>
    <input type="text" name="email" value="<?php echo $d->email;?>"></td>
    </tr>
    <tr>
        <td>Address:</td><td><textarea name="address"><?php echo $d->address;?></textarea></td>
    </tr>
    <tr>
                <td>Gender:</td>
                <td>
                    
                    <input type="radio" name="gender" value="male" <?php if(($d->gender)=="male"){echo "checked";}?>>Male
                    <input type="radio" name="gender" value="female" <?php if(($d->gender)=="female"){echo "checked";}?>>Female
                    </td>
            </tr>
   
            <tr>
            <td>Language:</td>
            <td>
            <?php
            $language=$d->language;
            $lan=array("gujarati","english");
           $le=explode(",",$language);
            // /print_r($le);exit;
            foreach($lan as $l)
               {
                    $checked="";
                    //print_r($l);exit;
                    if(in_array($l,$le))
                    {
                        //echo $l;
                        $checked = "checked";
                                      
                     }
             echo '<input type="checkbox" name="chk[]" value="'.$l.'" '.$checked.' > '.$l;
                    
             }
               ?>
              </td>
        </tr>
    <tr>
        <td>Country:</td>
        <td><select name="country">
        <?php
                    foreach($data as $c)
                    {
                        if($c->cid == $d->country)
                        {
                        ?>
                        <option value="<?php echo $c->cid;?>" selected >
                        <?php echo $c->cname;?></option>
                  <?php 
                         }
                  else
                  {
                  ?>
                   <option value="<?php echo $c->cid;?>">
                        <?php echo $c->cname;?></option>
                        <?php
                  }
                }
                ?>
                </select>
    </td>
    
      </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="update" value="UPDATE">
            </form>
            </body>



            
