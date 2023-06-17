
 <?php
    // foreach( $fet as $d)
    // {
        ?>
        <center>
  
<form method="post">
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
        <td><input type="text" name="gender" value="<?php echo $d->gender;?>"></td>
        <tr>
      <td>
    Language:</td>
    <td><input type="text" name="language" value="<?php echo $d->language;?>"></td>
    <tr>
        <td>Country:</td>
        <td><select name="country">
                  <?php 
                    $sql="SELECT * FROM 
                     country JOIN register ON register.country=country.cid";
                     $q=$this->con->query($sql);
                     //$fetch=$q->fetch_object();
                     ?>
                        <option value="<?php echo $q->cname?>">
                    
                
                                        </td>
 <?php ?>   </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="update" value="UPDATE">
    
    