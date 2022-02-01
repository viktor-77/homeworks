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

        class Calculator {

            public function getAdding(float $a, float $b) {
                echo $a + $b . '<br>';
            }

            public function getMultiply(float $a, float $b) {
                echo $a * $b . '<br>';
            }

            public function getDividing(float $a, float $b) {
                if ($b === 0.0) {
                    echo "exeption dividing by zero" . '<br>';
                } else {
                    echo $a / $b . '<br>';
                }
            }

            public function getSubtraction(float $a, float $b) {
                echo $a - $b . '<br>';
            }

        }

        $calc = new Calculator();

        $calc->getAdding(4, 5);

        $calc->getMultiply(4, 5);

        $calc->getDividing(4, 5);

        $calc->getSubtraction(4, 5);
        ?>
    </body>
</html>
