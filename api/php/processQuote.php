<?php

$fName = "";
$lName = "";
$address = "";
$jobType = "";
$description = "";





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function myFunction(){
            document.getElementById("name").innerHTML = "CHeck it out";
            document.getElementById("screen").style.backgroundColor = "black";
            alert(5+44);
        }
    </script>

    <title>Document</title>
</head>
<body>
    <!-- <div id="screen" name="screen">
        <p id="name" name="name">name</p>
        <input type="text" onchange="" value="">
        <button type="button" onclick="myFunction()">Try it</button>


    </div> -->
    
    First name: <?php echo $_POST['fName']; ?>
    <p>Last name: <?php echo $_POST['lName']; ?></p>
    <p>Address: <?php echo $_POST['address']; ?></p>
    <p>Job Type: <?php echo $_POST['jobType']; ?></p>
    <p>description: <?php echo $_POST['description']; ?>
</p>

</body>
</html>