<?php

class CodespaceStudent {

// ================ fields ===================

    private $studentNumber;
    private $password;

    private $attendance = 10;
    private $attendanceFlag = false;

// ================ constructor ================

    public function __construct($studentNumberInput, $passwordInput) {

        $this->studentNumber = $studentNumberInput;
        $this->password = $passwordInput; 

    }

 // ================ methods ================

    private function generateStudNo() {
        return "#" . rand(10000, 90000);
    }

    public function login() {
        return $this->studentNumber . " has just logged in";
    }

    public function missedClass() {
        $this->attendance =  $this->attendance - 1;

        if ($this->attendance == 0) {

            $this->attendanceFlag = true;
            return "You have raised an attendence flag.";
        }
    }

    public function __toString() {
        return "Student No: $this->studentNumber - Password: $this->password - Missed classes left: $this->attendance - Attendance Flag:" . intval($this->attendanceFlag);

    }

 // ================ getters and setters ================

    public function getStudentNumber()
    {
        return $this->studentNumber;
    }

    public function setStudentNumber($newStudentNumber)
    {
        $this->studentNumber = $newStudentNumber;

        return $this;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}

// ------ test ---------

    // instanciation
    $student1 = new CodespaceStudent("Thato", "Molefe6545843");
    $student2 = new CodespaceStudent("Duane", "guest");

    $student2->setStudentNumber("slighjrek");

    $student2->missedClass();
    $student2->missedClass();
    $student2->missedClass();


    echo$student1;
    echo "<br>";
    echo$student2;


    

