<?php 


class Person{
    public $name;
    public $age;
    public $cnic;

    // call automatically - method
    public function __construct($name, $age, $cnic) {
        $this->name = $name;
        $this->age = $age;
        $this->cnic = $cnic;
    }
    
   function speak(){  
        echo "This $this->name has cnic $this->cnic and age $this->age and can speak <br>";
    }
    
    function see(){    
        echo "This $this->name can see<br><br>";
    }
    
    function notsee(){  
        echo "This $this->name can not see<br><br>";
    }


}
$p1 = new Person('Ali',23,03455454);
$p1->speak();
$p1->see();

$p2 = new Person('Umair',30, 03545454);
$p2->speak();
$p2->notsee();

class Dept extends Person{

    public $deptName;
    public $deptLoc;
    public $deptTime;
    function __construct($deptName,$deptLoc,$deptTime){
        $this->deptName = $deptName;
        $this->deptLoc = $deptLoc;
        $this->deptTime = $deptTime;
    }

    function info(){
        echo "Department $this->deptName has location $this->deptLoc and timings $this->deptTime <br>";
    }
}


$d1 = new Dept('IT','1st Floor','8-5');
$d1->info();


class Emp extends Dept{
    public $job;
    public $salary;
    public $account;

    function __construct($job,$salary,$account,$name,$age){
        $this->job = $job;
        $this->salary = $salary;
        $this->account = $account;
        $this->name = $name;
        $this->age = $age;
    }

    function progress(){
        echo "Employee <b>$this->name</b> has bank account no. $this->account having job role $this->job with salary $this->salary and age $this->age";
    }
}
$e1 = new Emp('Developer','$1000',456564564, 'Kashan',20);
$e1->progress();

?>