<?php
//define person class
class person{
    protected $name;
    protected $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function displayPersonDetails()
    {
        echo"Name:$this->name\n";
        echo"Age:$this->age\n";

    }
}

class employee extends person{
    private $salary;
    private $position;

    public function __construct($name, $age , $salary,$position){
        parent::__construct(   $name,$age);
        $this->salary=$salary;
        $this->position=$position;
    }
    public function displayEmployeedetails(){
        $this->displayPersonDetails();

        echo"position:$this->position\n";
        echo"salary:$this->salary\n";
    }
}
// Example usage
$employee = new Employee("John Doe", 30, 50000, "Software Engineer");

$employee->displayEmployeeDetails();

