 <?php
include("config/databaseconfig.php");
include("types/quote.php");
// if(isset($_POST['submit'])){
//     if(empty($_POST["fname"])){
//         $errors["fname"] = "Need a first name";
//         print json_encode($errors);
//     }else{
//     $fname = $_POST ["fname"];
//     echo "first name: " + $fname;
//     }
// }    


function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$fNameErr = $lNameErr = $addressErr = $jobTypeErr = $descriptionErr =  "";
$database = new Databaseconfig();

$query = "INSERT INTO quotes VALUES(?,?,?,?,?)";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fName"])) {
    $fNameErr = "* First name is required";
  } else {
    $fName = test_input($_POST["fName"]);
    echo "First Name: ". $fName."<br />";
  }
    if (empty($_POST["lName"])) {
    $lNameErr = "* Last name is required";
  } else {
    $lName = test_input($_POST["lName"]);
    echo "Last name: ". $lName."<br />";
  }
  if (empty($_POST["address"])) {
    $addressErr = "* Address is required";
  } else {
    $address = test_input($_POST["address"]);
    echo "Address: ". $address."<br />";
  }
  if (empty($_POST["jobType"])) {
    $jobTypeErr = "* jobType is required";
  } else {
    $jobType = test_input($_POST["jobType"]);
    echo "Job Type: ". $jobType."<br />";
  }
  if (empty($_POST["description"])) {
    $descriptionErr = "* Description is required";
  } else {
    $description = test_input($_POST["description"]);
    echo "Description: ". $description."<br />";
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/getAQuote.css">
    <script src="../js/quote.js"></script>
    <title>Document</title>
</head>
<body>
    <div name=header><h1>New Quote</h1></div>
   <div name='formDiv'>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div id="formSections">
        <label for="fName">First Name: </label><br>
        <input id="fName" name="fName" type="text" >
        <span class="error"><?php echo $fNameErr;?></span>
        </div>
        <div id="formSections">
        <label for="lName">Last Name: </label><br>
        <input id="lName" name="lName" type="text" >
        <span class="error"><?php echo $lNameErr;?></span>

        </div>
        <div id="formSections">
        <label for="address">Address: </label><br>
        <input id="address" name="address" type="text">
                <span class="error"><?php echo $addressErr;?></span>

        </div>
        <div id="formSections">
        <label for="">Type of Job:</label><br>
        <label for="jobType">Business </label>
        <input name="jobType" type="radio" value="Business">
        <label for="jobType">Personal</label>
        <input name="jobType" type="radio" value="Personal">
            <span class="error"><?php echo $jobTypeErr;?></span>

        </div>
        <div id="formSections" name="descriptionDiv">
            <label for="">Please give us a short description of the job:</label><br>
            <textarea id="description" name="description" type="text" ></textarea>
                    <span class="error"><?php echo $descriptionErr;?></span>
        </div>
    </div>
    <div>
        <button type="submit">Submit</button>
        <button type="button">Cancel</button>
    </div>
   </form>
   
</body>
</html>