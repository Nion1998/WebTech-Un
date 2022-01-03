
<?php
class Student {
  public $id; // instance variables
  public $name;
  public $age;
  public function __construct($name,$id, $age) {
     $this->name = $name;
	$this->id = $id;
	$this->age = $age;
  }
  public function message() {
    return "Name = " . $this->name . "ID = " . $this->id ."Age=". $this->age ."!";
  }
}

$stu = new student("nion", "155","21");
$stu1= new student("mehedi", "255","20");
echo $stu -> message();
echo "<br>";
echo $stu1 -> message();
echo "<br>";
