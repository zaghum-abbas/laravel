<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="submit" method="POST">
@csrf
<input type="text" name="FisrtName" placeholder="First Name">
<br>
<br>
<input type="text" name="LastName" placeholder="Last Name">
<br>
<br>
<input type="text" name="Email" placeholder="Email">
<br>
<br>
<button type="submit">Insert</button>
</form>
    </body>
</html>