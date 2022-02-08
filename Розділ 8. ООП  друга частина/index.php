<?php
    require("classes/Employee.php");

    $user1 = new Employee();

    $user1->setName("Viktor");
    $user1->setAge("20");
    $user1->setGender("male");
    $user1->setSalary(10000);

    echo $user1->getName() . "<br>";
    echo $user1->getAge() . "<br>";
    echo $user1->getGender() . "<br>";
    echo $user1->getSalary() . "<br>" . "<hr>";



    $user2 = new Employee();

    $user1->setName("Oleg");
    $user1->setAge("22");
    $user1->setGender("male");
    $user1->setSalary(20000);

    echo $user1->getName() . "<br>";
    echo $user1->getAge() . "<br>";
    echo $user1->getGender() . "<br>";
    echo $user1->getSalary() . "<br>". "<hr>";

    


    $user3 = new Employee();

    $user1->setName("Roza");
    $user1->setAge("30");
    $user1->setGender("female");
    $user1->setSalary(80000);

    echo $user1->getName() . "<br>";
    echo $user1->getAge() . "<br>";
    echo $user1->getGender() . "<br>";
    echo $user1->getSalary() . "<br>". "<hr>";

?>