<?php

class Student
{
    public String $name;
    public Int $age;

    public function __construct(String $name, Int $age)
    {
        
        if ($age < 18) {
            echo "yoguurr";
        };

        $this->name = $name;
        $this->age = $age;
    }
}

$student1 = new Student("Margarita", 17);
$student2 = new Student("Paco", 40);
$student3 = new Student("otro", 30);

$students = [$student1, $student2, $student3];

foreach ($students as $student) {
    echo $student->name . " - " . $student->age .  "<br>";
} 


