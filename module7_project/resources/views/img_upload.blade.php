<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="imgs" enctype="multipart/form-data">
        @csrf
        <table align="center" border="1">
            <tr>
                <td><th align="center">Upload Image</th>
</td>
</tr>
<tr>
    <td>Upload File</td>
    <td>
        <input type="file" name="file"> 
</td>
</tr>
<tr>
    <td colspan="2" align="center">
        <input type="submit" value="Upload" name="submit">
</td>
</table>
    </form>
</body>
</html>