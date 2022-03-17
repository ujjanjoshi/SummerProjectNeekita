<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php include 'Nav.html';?>
<div class="bg">
    </div>
    <div class="main">
        <h1>Welcome, Neekita Maharjan (Admin)</h1>
    
    </div>
    <div class="time">
        <p>
            <script> 
                // var today = new Date();
                // var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
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