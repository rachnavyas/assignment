<form method="post" enctype="multipart/form-data">
<table border="1" align="center">
    <tr>
        <td>Product Name: </td>
        <td><input type="text" name="pname">
    </td>
</tr>
<tr>
        <td>Image: </td>
        <td><input type="file" name="pimg">
    </td>
</tr>
<tr>
        <td>Price: </td>
        <td><input type="text" name="price">
    </td>
</tr>
<tr>
        <td>Desc: </td>
        <td><textarea name="pdesc"></textarea>
    </td>
</tr>
<tr>
        <td>Brand: </td>
           <td><select name="brand">
                    <?php
                    foreach($data as $d){?>
                        <option value="<?php echo $d->brand_id?>">
                        <?php echo @$d->brand_name?></option>
                  <?php  }?>
                                  
                    
                </td>
            </tr>
   
<tr>
        <td colspan="2" align="center">
            <input type="submit" name="submit" value="submit">
        
    </td>
</tr>

