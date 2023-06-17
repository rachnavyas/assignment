<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center"s>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Language</th>
            <th>Country</th>
</tr>
<?php

foreach($alldata as $a)
{
    ?>
    <tr>
        <td><?php echo $a->id;?></td>
        <td><?php echo $a->name;?></td>
        <td><?php echo $a->email;?></td>
        <td><?php echo $a->gender;?></td>   
        <td><?php echo $a->lan;?></td>
        <td><?php echo $a->cname;?></td>
        <td><a href="delete_user?did=<?php echo $a->id?>">Delete</a>/
        <a href="edit_user?eid=<?php echo $a->id?>">Update</a>
    
    </td>
        
</tr>
<?php
}
?>
</table>
</body>
</html>
