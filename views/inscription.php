<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="./../controllers/userC.php" method="post">
        <label for="LastName">LastName</label>
        <input type="text" name="LastName" id="LastName"> <br><br>

        <label for="FirstName">FirstName</label>
        <input type="text" name="FirstName" id="FirstName"><br><br>

        <label for="Password">Password</label>
        <input type="password" name="Password" id="Password"><br><br>

        <label for="Email">Email</label>
        <input type="email" name="Email" id="Email"><br><br>

        <label for="username">username</label>
        <input type="text" name="username" id="username"><br><br>

        <input type="submit" value="add">
        <input type="reset" value="reset">
    </form>
</body>

</html>