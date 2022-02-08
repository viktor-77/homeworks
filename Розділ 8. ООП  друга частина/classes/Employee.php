<?php
    require("interfaces/IEmployee.php");
    class Employee implements IEmployee
    {
        public $name;
        public $age;
        public $gender;
        public $salary;
        
        function setName(string $userName) {
            $this->name = $userName;
        }

        function getName(): string {
            return $this->name;
        }

        function setAge(int $userAge) {
            $this->age = $userAge;
        }

        function getAge(): int {
            return $this->age;
        }

        function setGender(string $userGender) {
            $this->gender = $userGender;    
        }

        function getGender(): string {
            return $this->gender;
        }

        function setSalary(int $userSalary) {
            $this->salary = $userSalary;
        }

        function getSalary(): int {
            return $this->salary;
        }
        
    }
    
?>