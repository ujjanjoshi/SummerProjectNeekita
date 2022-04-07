<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Main.css">
    <link rel="stylesheet" href="../CSS/Password.css">   
    <title>Document</title>
</head>
<body>
<?php include 'Nav.php';?>
    <div class="bg">
    </div>
    <div class="pass">
    <h1>Password</h1>
    <form method="Post"action="../Backend/ChangePassword.php">
        <p>Old Password: <input type="text" name="tutoldpas" class="pold"></p>
        <p>New Password:<input type="text" name="tutnewpas" class="pnew"></p>
        <p>Confirm New Password:<input type="text" name="tutconfrompass"class="pconfirm"></p>
        <input type="submit" class="submitbtn" value="ChangePassword">
    </form>
   </div>
</body>
</html>