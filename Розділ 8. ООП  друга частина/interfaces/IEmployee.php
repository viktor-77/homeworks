<?php
    require("IUser.php");
    interface IEmployee extends IUser
    {
        public function setSalary(int $userSalary);
        public function getSalary(): int;
    }
?>