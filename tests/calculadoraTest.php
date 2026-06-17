<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;

require_once __DIR__ . '/../vendor/autoload.php';

class CalculadoraTest extends TestCase
{
    public function testSumar()
    {
        // Arrange
        $calculadora = new Calculadora();

        // Act
        $resultado = $calculadora->sumar(5, 3);

        // Assert
        $this->assertEquals(8, $resultado);
    }

    public function testRestar()
    {
        // Arrange
        $calculadora = new Calculadora();

        // Act
        $resultado = $calculadora->restar(10, 4);

        // Assert
        $this->assertEquals(6, $resultado);
    }

    public function testMultiplicar()
    {
        // Arrange
        $calculadora = new Calculadora();

        // Act
        $resultado = $calculadora->multiplicar(2, 5);

        // Assert
        $this->assertEquals(10, $resultado);
    }

    public function testDividir()
    {
        // Arrange
        $calculadora = new Calculadora();

        // Act
        $resultado = $calculadora->dividir(20, 4);

        // Assert
        $this->assertEquals(5, $resultado);
    }

    // semana 08
    public function testEsPar()
    {
        $calc = new Calculadora();

        $this->assertTrue($calc->esPar(4));
        $this->assertFalse($calc->esPar(5));
    }

    public function testEsPositivo()
    {
        $calc = new Calculadora();

        $this->assertTrue($calc->esPositivo(10));
        $this->assertFalse($calc->esPositivo(-5));
        $this->assertFalse($calc->esPositivo(0));
    }

    public function testEsNegativo()
    {
        $calc = new Calculadora();

        $this->assertTrue($calc->esNegativo(-10));
        $this->assertFalse($calc->esNegativo(5));
        $this->assertFalse($calc->esNegativo(0));
    }

    public function testEsCero()
    {
        $calc = new Calculadora();

        $this->assertTrue($calc->esCero(0));
        $this->assertFalse($calc->esCero(5));
        $this->assertFalse($calc->esCero(-2));
    }
}