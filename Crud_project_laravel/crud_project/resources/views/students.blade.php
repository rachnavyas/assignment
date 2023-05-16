<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Form</title>
    <style>
        .table{
            
            white-space:nowrap;
        }
        </style>

</head>
<body>
    <div style="height:200px;width:200px;display: inline-block;">
    <form action="" method="post">
        @csrf
      @if($errors->any())
      
        {{$errors}}
      @endif
        Name:<input type="text" name="name" id="name">
        <br>
        <br>
        Email:<input type="email" name="email" id="email">
        <br><br>
        Marks:<input type="text" name="marks" id="marks">
        <br><br>
        <input type="submit" name="submit" value="Add Detail">

    </form>
   
</div>
        <div style="height:200px;width:200px;display: inline-block;margin-left:200px;">
       <table border="1" class="table" style="width:100%;">
        <tr>
            <th>Name</th><th>Email</th><th>Marks</th>
            <th colspan=2>Action</th>
</tr>
            @foreach($students as $stu)
           <tr>
                <td> {{$stu->name}}</td>
                <td > {{$stu->email}}</td>
                <td>{{$stu->marks}}</td>
                <td><a href="{{url('/edit',$stu->id)}}">Edit</a></td>
                <td><a href="{{url('/delete',$stu->id)}}">delete</a></td>
                
</tr>
@endforeach
            </div>
    

</body>
</html>