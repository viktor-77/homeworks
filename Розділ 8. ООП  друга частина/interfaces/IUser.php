<?php
    interface IUser 
    {
        public function setName(string $userName): void;
        public function getName(): string;
        
        public function setAge(int $userAge): void;
        public function getAge(): int;
        
        public function setGender(string $userGender): void;
        public function getGender(): string;
    }
?>