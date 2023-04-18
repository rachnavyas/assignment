<form method="post" enctype="multipart/form-data">
<table border="1" align="center">
    <tr>
        <td>Product Name: </td>
        <td><input type="text" name="pname" value="<?php $p->pname;?>">
    </td>
</tr>
<tr>
        <td>Image: </td>
        <td><input type="file" name="pimg " value="<?php $p->pimg;?>">
    </td>
</tr>
<tr>
        <td>Price: </td>
        <td><input type="text" name="price" value="<?php $p->pname;?>">
    </td>
</tr>
<tr>
        <td>Desc: </td>
        <td><textarea name="pdesc">
        <?php  echo $p->desc;?>
        </textarea>
    </td>
</tr>
<tr>
        <td>Brand: </td>
           <td><select name="brand">
                    <?php
                    foreach($data as $d){?>

                        <option value="<?php if ($c->brand==){echo $d->brand_id}?>">
                        <?php echo @$d->brand_name?></option>
                  <?php  }?>
                                  
                    
                </td>
            </tr>
   
<tr>
        <td colspan="2" align="center">
            <input type="submit" name="submit" value="submit">
        
    </td>
</tr>

