<?php
    require("IUser.php");
    interface IEmployee extends IUser
    {
        public function setSalary(int $userSalary): void;
        public function getSalary(): int;
    }
?>