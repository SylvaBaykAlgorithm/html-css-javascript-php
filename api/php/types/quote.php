<?php
class Quote
{
    private $id;
    private $fname;
    private $lname;
    private $address;
    private $jobType;
    private $description;


    public function getId(){return $this->id;}
    public function setId($id){$this->id=$id;}
    public function getFName(){return $this->fname;}
    public function setFName($name){$this->fname=$name;}
    public function getLName(){return $this->lname;}
    public function setLName($lname){$this->lname=$lname;}
    public function getAddress(){return $this->address;}
    public function setAddress($address){$this->address=$address;}
    public function getJobType(){return $this->jobType;}
    public function setJobType($jobType){$this->jobType=$jobType;}
    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description=$description;}
    

    public function __construct(QuoteRequest $request)
    {
        // $this->id = 
            $this->fname = $request->getFname();
        $this->lname = $request->getLname();
        $this->address = $request->getAddress();
        $this->jobType = $request->getJobType();
        $this->description = $request->getDescription();


    }
}

class QuoteRequest
{
    private $fname;
    private $lname;
    private $address;
    private $jobType;
    private $description;

    public function getFName()
    {return $this->fname;}
    public function setFName($fname) {$this->fname = $fname;}

    public function getLName(){return $this->lname;}
    public function setLName($lname) {$this->lname = $lname;}
    public function getAddress(){return $this->address;}        
    public function setAddress($address) {$this->address = $address;}
    public function getJobType(){return $this->jobType;}    
    public function setJobType($jobType){$this->jobType = $jobType;}
    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description = $description;}

    public function __construct(string $fname, string $lname, string $address, string $jobType, string $description)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->address = $address;
        $this->jobType = $jobType;
        $this->description = $description;

    }

}

?>