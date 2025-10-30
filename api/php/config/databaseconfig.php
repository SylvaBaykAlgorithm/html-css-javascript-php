<?php


class Databaseconfig{
    
public $db_server ="localhost";
public $db_user = "root";
public $db_pass = "sylvabayk00";
public  $db_name ="ashwoodconstructionsql";
public $db_conn = "";

public function ConnectDatabase(){
  try{
    $db_server = $this->db_server;
    $db_user = $this->db_user;
    $db_pass = $this->db_pass;
    $db_name = $this->db_name;
$db_conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
echo "Connected Sucessfully";
return $db_conn;
}catch(Exception $e){
    echo "".$e->getMessage()."";
}  
}
public function RunCreatQuoteQuery(string $query,QuoteRequest $params){
    $conn = '';
    $statement = '';
    try{
        $fname = $params->getFName();
        $lname = $params->getLName();
        $address = $params->getAddress();
        $jobtype = $params->getJobType();
        $description = $params->getDescription();
        $conn = $this->ConnectDatabase();
        $statement = $conn->prepare($query);
        $statement->bind_param("sssss",$fname, $lname, $address, $jobtype, $description);
        
        $statement->execute();
        echo "Quote added successfully";
    
    }catch(Exception $e){
        echo "".$e->getMessage()."";
    }finally {
        $statement->close();
        $conn->close();
    }

}
}

?>