
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
   
    
    *
    {
        margin: 0;
        padding: 0;
    }
    #div
    {
        padding-top: 100px;
       padding-left: 800px;
    }
    td{
        background-color:lightgrey;
        padding: 5px;
        
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
    </style>
</head>
<body>
    <div class="background-image">
        <div id="div">
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
              <input type="radio" name="day" value="full" style="width:20px;" id="fullday">FullDay
              <input type="radio" name="day" value="Half" style="width:20px;" id="halfday"> HalfDay 
              <input type="radio" name="day" value="custom" style="width:20px;"
              id="custom">Custom
                </td>
            </tr>
            <tr>
                <td class="mycls">
                   
                    CHECKIN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    CHECKOUT
                </td>
</tr>
<tr>
    <td class="mycls">
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
</html>