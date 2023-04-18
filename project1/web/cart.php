



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    td,td
    {
         
  padding: 5px;
}
    
    </style>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Total</td>
            <td>Delete</td>
            

</tr>
<tr>
    <?php
    $subtotal=0;
    foreach($cart as $c) 
        {
    ?>
    <tr>
    <td><img src="../admin/upload/<?php echo $c->pimg;?>" width="100" height="100"></td>
    <td><?php echo $c->pname;?></td>
    <td><?php echo $c->price;?></td>
    <td align="center"><?php echo $c->qty;?></td>
    <td><?php $total=$c->price*$c->qty;
    echo $total;
    $subtotal+=$c->qty*$c->price;
    ?> 
    <td><a href="delete_item?dit=<?php echo $c->pid;?>">Delete</a>
    </tr>

<?php
}
?>
    <tr><td colspan="5" align="right">Subtotal</td>
    <td><?php echo  $subtotal;?></td>
</tr>
<tr>
    <td colspan="6" align="center">
    <a href="paytm-payment">PAY NOW</a>
</body>
</html>