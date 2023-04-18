
<table border="1" style="margin-left: 100px ;">
<th>Id</th>
    <th>Name</th><th>Email</th><th>Address</th>
    <th>Gender</th>
    <th>Language</th>
    <th>Country</th><th colspan="2" align="center">Action</th>
    <?php
    foreach( $users as $d)
    {
        ?>
    <tr>
        <td><?php echo$d->id ?></td>
        <td><?php echo$d->name ?></td>
        <td><?php echo$d->email?></td>
        <td><?php echo$d->address?></td>
        <td><?php echo$d->gender?></td>
        <td><?php echo$d->language?></td>
        <td><?php echo$d->cname?></td>
        <td> <a href="edit?id=<?php echo $d->id?>">Update</a>
    
    </td>
    <td> <a href="delete?id=<?php echo $d->id?>">Delete</a>
    
    </td>
    </tr>
   <?php 
   }
    ?>