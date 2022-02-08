<?php
    require("interfaces/IEmployee.php");
    class Employee implements IEmployee
    {
        public $name;
        public $age;
        public $gender;
        public $salary;
        
        function setName(string $userName): void {
            $this->name = $userName;
        }

        function getName(): string {
            return $this->name;
        }

        function setAge(int $userAge): void {
            $this->age = $userAge;
        }

        function getAge(): int {
            return $this->age;
        }

        function setGender(string $userGender): void {
            $this->gender = $userGender;    
        }

        function getGender(): string {
            return $this->gender;
        }

        function setSalary(int $userSalary): void {
            $this->salary = $userSalary;
        }

        function getSalary(): int {
            return $this->salary;
        }
        
    }
    
?>