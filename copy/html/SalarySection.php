<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Main.css">
    <link rel="stylesheet" href="../CSS/SalarySection.css">   
    <title>Document</title>
</head>
<body>
<?php include 'Nav.php';?>
    <div class="bg">
    </div>
    <div class="top">
        <p>Salary Section:</p>
    </div>
    <div class="table">
        <form action="#">
            <p>
                <select name="year" class="yr">
                    <option value="Year">Year</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                  </select>
                <select name="month" class="mth">
                    <option value="Month">Month</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                  </select>
            <input type="text" name="srch"class="serch" placeholder="Search by name">
            <input type="submit" class="smbtbtn" value="Search"></p>
        </form>
        <div class="undr">

        </div>
    </div>
</body>
</html>