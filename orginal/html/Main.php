<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php include 'Nav.php';?>
<div class="bg">
    </div>
    <div class="main">
        <?php 
        include'../Backend/DatabaseConnection.php';
        $sql = "SELECT * FROM details";
$result = $conn->query($sql);
$chosee=$_SESSION['chose'];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($_SESSION['usrname']==$row["Username"]){
            $name= $row["Name"];
        }
    }}else {
  echo "0 results";
}
$_SESSION["name"] = $name;
echo"<h1>Welcome, ".$name." (".$chosee.")</h1>";
        ?>
        <!-- <h1>Welcome, Neekita Maharjan (Admin)</h1> -->
    
    </div>
    <div class="time">
        <p>
            <script> 
                document.write(new Date().toLocaleDateString()); </script>
            </p>
            <p>
                <script> 
                const d = new Date();
                let day = d.getDay();
                if(day==0){
                    document.write("Sunday");
                }
                else if(day==1){
                    document.write("Monday");
                }                
                else if(day==2){
                    document.write("Tuesday");
                }             
                else if(day==3){
                    document.write("Wednesday");
                }               
                else if(day==4){
                    document.write("Thursday");
                }                
                else if(day==5){
                    document.write("Friday");
                }      
                else{
                    document.write("Saturday");
                }
            </script>
            </p>
    </div>
</body>
</html>