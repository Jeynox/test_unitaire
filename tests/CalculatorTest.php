<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void
    {
        $numb1 = 2;
        $numb2 = 4;
        $expectedResult = 8;

        $calculator = new Calculator();
        $multiplication = $calculator->multiplication($numb1, $numb2);

        $this->assertSame($expectedResult, $multiplication, 'Probleme avec le resultat');
    }

    public function testIsHeven(): void
    {
        $numb = 15;
        $expectedResult = false;

        $calculator = new Calculator();
        $result = $calculator->isHeven($numb);

        $this->assertIsBool($expectedResult, $result, 'Ce n\'est pas le resultat attendu');
        }
}