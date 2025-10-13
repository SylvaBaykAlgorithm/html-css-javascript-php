<?php
include("config/databaseconfig.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/getAQuote.css">
    <title>Document</title>
</head>
<body>
    <div name=header><h1>New Quote</h1></div>
   <div name='formDiv'>
    <form action="">
        <div id="formSections">
        <label for="fname">First Name: </label><br>
        <input id="fname" type="text">
        </div>
        <div id="formSections">
        <label for="lname">Last Name: </label><br>
        <input id="lname" type="text">
        </div>
        <div id="formSections">
        <label for="address">Address: </label><br>
        <input id="address" type="text">
        </div>
        <div id="formSections">
        <label for="">Type of Job:</label><br>
        <label for="jobType">Business </label>
        <input name="jobType"type="radio">
        <label for="jobType">Personal</label>
        <input name="jobType" type="radio">
        </div>
        <div id="formSections" name="descriptionDiv">
            <label for="">Please give us a short description of the job:</label><br>
            <input id="descriptionText"type="text">
        </div>
        
    </form>
    </div>
    <div>
        <button type="button">Submit</button>
        <button type="button">Cancel</button>

    </div>
</body>
</html>