<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php

        class Square {

            public function getSquare(int $a) {
                echo $a * $a . "<br>";
            }

        }

        class Rectangle {

            public function getSquare(int $a, int $b) {
                echo ($a * $b) . "<br>";
            }

        }

        class Triangle {

            public function getSquare(float $a) {
                echo round( $a*$a * sqrt(3) ) / 4  . "<br>";
            }

        }

        class Round {

            public function getSquare(float $r) {
                echo ($r * $r * 3.14) . "<br>";
            }

        }

        $square = new Square;
        $square->getSquare(8);
        
        $rectangle = new Rectangle;
        $rectangle->getSquare(10, 18);

        $triangle = new Triangle;
        $triangle->getSquare(10);

        $round = new Round;
        $round->getSquare(10);

    ?>
</body>

</html>