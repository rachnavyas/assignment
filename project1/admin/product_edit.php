<form method="post" enctype="multipart/form-data">
<table border="1" align="center">
    <tr>

        <td>Product Name: </td>
        <td><input type="text" name="pname" value="<?php echo $p->pname;?>">
    </td>
</tr>
<tr>
        <td>Image: </td>
        <td><a href="all_images?imd=<?php echo $p->pid?>">images</a>
        
        <input type="file" name="pimg">
    </td>
</tr>
<tr>
        <td>Price: </td>
        <td><input type="text" name="price" value="<?php echo $p->price;?>">
    </td>
</tr>
<tr>
        <td>Desc: </td>
        <td><textarea name="pdesc"><?php echo $p->pdesc;?></textarea>
    </td>
</tr>
<tr>
        <td>Brand: </td>
           <td><select name="brand">
                    <?php
                    foreach($brand as $b)
                    {
                        if($b->brand_id==$p->bid)
                        {
                        ?>
                        <option value="<?php echo $b->brand_id;?>" selected>
                        <?php echo $b->brand_name;?></option>
                        <?php 
                         }
                  else
                  {
                  ?>
                   <option value="<?php echo $c->cid;?>">
                        <?php echo $b->brand_name;?></option>
                        <?php
                  }
                }
                ?>
                                  
                    
                </td>
            </tr>
   
<tr>
        <td colspan="2" align="center">
            <input type="submit" name="submit" value="submit">
        
    </td>
</tr>

