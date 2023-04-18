

<table border="1" align="center">
   <tr><th colspan="8" style="align:center;">PRODUCTS</th></tr>
<th>Product Id</th>
<th>Product Name</th>
    <th>Image</th>
    <th>Price</th>
    <th>Discription</th>
    <th>Brand</th><th colspan="2" align="center">Action</th>
    <?php
    foreach( $pdata as $p)
    {
        ?>
    <tr>
    <td><?php echo $p->pid?></td>
        <td><?php echo $p->pname?></td>
        <td>
            <img src="upload/<?php echo $p->brand_name;?>/<?php echo$p->pimg;?>"><a href="all_images?imd=<?php echo $p->pid?>">Images</td>
        <td><?php echo $p->price?></td>
        <td><?php echo $p->pdesc?></td>
        <td><?php echo $p->brand_name?></td>
        <td> <a href="product_edit?pid=<?php echo $p->pid?>">Update</a>
    
    </td>
    <td> <a href="product_delete?pid=<?php echo $p->pid?>">Delete</a>
    
    </td>
    </tr>
   <?php 
   }
    ?>
    
    