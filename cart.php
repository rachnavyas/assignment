<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function gettotal1()
        {
            var table = document.getElementById("mytable");
            var total=0;
            var qty=0;
            var price=0;
            var e=document.getElementById("qty1");
            var value=e.value;
            var row=table.rows[1];
            price=row.cells[1].innerHTML;
            total=price*value;
            document.getElementById("total1").innerHTML =total;
            let total1=0;
            let total2=0;
            total1=document.getElementById("total1").innerHTML;
            total2=document.getElementById("total2").innerHTML;
            grandtotal=parseInt(total1)+parseInt(total2);
            document.getElementById("grandtotal").innerHTML =grandtotal;
        }
        function gettotal2()
        {
            var table = document.getElementById("mytable");
            var total=0;
            var qty=0;
            var price=0;
            var e=document.getElementById("qty2");
            var value=e.value;
            var row=table.rows[2];
            price=row.cells[1].innerHTML;
            total=price*value;
            document.getElementById("total2").innerHTML =total;
            var grandtotal=0;
          let total1=0;
            let total2=0;
            total1=document.getElementById("total1").innerHTML;
            total2=document.getElementById("total2").innerHTML;
            
            grandtotal=parseInt(total1)+parseInt(total2);
            document.getElementById("grandtotal").innerHTML =grandtotal;

        }
        
       
        </script>
</head>
<body>
    <table align="center" border=1 id="mytable">
        <form method="">
        
        <tr>
            <th>Product</th><th>Price</th><th>Qty</th><th>Total</th>
        </tr>
        <tr>
            <td>Samsung Mobile</td>
            <td>50000</td>
            <td><select name="qty" onchange="gettotal1()" id="qty1" >
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
</td>
<td id="total1" >
50000
</td>
<tr>
            <td>Iphone</td>
            <td>75000</td>
            <td><select name="qty" id="qty2" onchange="gettotal2()">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
</td>
<td  id="total2">
    75000
</td>

<tr><td colspan="2" align="center" >
    Grand Total</td>
    <td colspan="2" id="grandtotal">
        <?php
        echo 75000+50000;
        ?>
    </td>
           
</body>
</html>