<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Form</title>
   
</head>
<body>
    <div style="height:200px;width:200px;display: inline-block;">
    
    <form action="" method="post">
        @csrf
        Name: <input type="text" name="name" id="name" value="{{$student->name}}">
        <br>
        <br>
        Email: <input type="email" name="email" id="email" value="{{$student->email}}">
        <br><br>
        Marks: <input type="text" name="marks" id="marks" value="{{$student->marks}}">
        <br><br>
        <input type="submit" name="submit" value="Update">
</div>