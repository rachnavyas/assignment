
<!DOCTYPE html>
<html lang="en">
<title>Document</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  
    
<style>
    body,html
    {
  height: 100%;
  
}
    .background-image
    {
        background-image: url("hotel.avif");
         background-repeat: no-repeat;
        background-size: cover;
        height : 100%;
        width:100%;
    }
   
    
    
    #div
    {
        padding-top: 80px;
       padding-left: 800px;
       width:300px;
       height:600px;
       color:none;
    
    }
    td{
        background-color:lightgrey;
        
        
    }
    input
    {
        border-style:inset;
        border-color:lightgrey;
        background-color: lightgray;
        width: 250px;
    }
    form{
        background-color: white;
        height: 400px;
      width:300px;
    }
    table{
        border: none;
        padding: 10px;
        
    }
    .submit
    {
        border-style:outset;
        border-color:lightgrey;
        background-color: lightgray;
        width: 100px;
        color: blue;
        margin-left: 80px;
        
    }
    select{
        padding: 2px;
    }
    .mycls{
        display: none;
    }
    #booking_slots
    {
        display:none;
    }
    </style>

        
    

    </script>
    
</head>
<body>
    <div class="background-image">
        <div id="div" style="height:600px;">
        <form method="post" name="booking" onsubmit="return validate()">
        <table>
            <tr>
            <th align="center" style="color:Blue;font-weight: bold;">BOOKING</th></tr>
            <tr>
                <td>Name</td>
            </tr>
            <tr>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Mobile</td>
            </tr>
            <tr>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>Email</td>
            </tr>
            <tr>
                <td><input type="text" name="email"></td>
            </tr>
            <tr >
                <td><lable for="rooms" style="padding-right:20px;">Rooms</lable>
                <lable for="adults" style="padding-left:30px;">Adults</lable>
                <lable for="children" style="padding-left:40px;"> Children</lable></td>
            </tr>
            <tr>
                <td><select name="rooms" style="margin-left:10px;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>
                    
                    <select name="adults" style="margin-left:60px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    
                    <select name="children" style="margin-left:50px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
              <input type="radio" name="booking_type" value="full" style="width:20px;" checked>FullDay
              <input type="radio" name="booking_type" value="half_day" style="width:20px;" > HalfDay 
              <input type="radio" name="booking_type" value="custom" style="width:20px;"
              id="custom">Custom
                </td>
            </tr>
            <tr>
                <td  id="booking_slots" >Select booking slot:
         
         
    <select name="booking_slot">
    <option value="">Select a slot</option>
            <option value="first_half">First Half (8AM to 6PM)</option>
            <option value="second_half">Second Half (7PM to 7AM)</option>
        </select>
        
</td>
</tr>
           
            <tr>
                <td>
                   CHECK IN CHECK OUT
                </td>
</tr>

    
<tr>
    <td>
        <input type="date" name="date" min="" max="" style="width:100px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="date" min="" max="" style="width:100px;">
    </td>
</tr>
            <tr>
                <td>
                <input type="submit" class="submit" name="submit" value="Book Now" style="font-weight: bold;">
            </td>

            </tr>
        </form>
        </table>
            
            
        </div>
        </div>
</body>
<script >
    $(function()
     {
    $('input[name="booking_type"]').change(function() 
    {
        var booking_type = $(this).val();
        if (booking_type == 'half_day') {
            $('#booking_slots').show();
        } else {
            $('#booking_slots').hide();
        }
    });
    $('form').submit(function(event) {
        event.preventDefault();
        var booking_type = $('input[name="booking_type"]:checked').val();
        var checkin_date = $('input[name="checkin_date"]').val();
        var checkout_date;
        var booking_slot;
        if (booking_type == 'full_day') {
            checkout_date = $('input[name="checkout_date"]').val();
        } else if (booking_type == 'half_day') {
            checkout_date = checkin_date;
            booking_slot = $('select[name="booking_slot"]').val();
        } else {
            // Custom booking
            // You can add your custom code here to handle custom bookings
            return;
        }
        // Perform validation and send Ajax request to book the room
        $.ajax({
            type: 'POST',
            url: 'book_room.php',
            data: JSON.stringify({
                booking_type: booking_type,
                checkin_date: checkin_date,
                checkout_date: checkout_date,
                booking_slot: booking_slot
            }),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            success: function(response) {
                // Handle the response from the server
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle the error
                console.log(xhr.responseText);
            }
        });
    });
});
</script>

</html>