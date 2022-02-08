<?php
    interface IUser 
    {
        public function setName(string $userName);
        public function getName(): string;
        
        public function setAge(int $userAge);
        public function getAge(): int;
        
        public function setGender(string $userGender);
        public function getGender(): string;
    }
?>