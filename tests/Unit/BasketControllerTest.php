<?php
/**
 * Created by PhpStorm.
 * User: Artem 2
 * Date: 21.05.2017
 * Time: 19:34
 */

namespace Tests\Unit;


use App\Http\Controllers\BasketController;
use Tests\TestCase;

class BasketControllerTest extends TestCase
{
    /*
     * Проверяем работу метода, проверяющего полное совпадения шаров  в пользовательской
     * и некоторой корзине, позитивное тестирование
     */
    public function testingExistAllElements()
    {
        $userBasket = [1,2,3,4,5,6,9,20];
        $basket = [1,3,20];

        $controller = new BasketController();

        $this->assertEquals(1,$controller->existAllElements($basket, $userBasket));
    }

    /*
     * Проверяем работу метода, проверяющего полное совпадения шаров в пользовательской
     * и некоторой корзине, позитивное тестирование
     */
    public function testingNotExistAllElements()
    {
        $userBasket = [1,2,3,4,5,6,9,20];
        $basket = [1,3,21];

        $controller = new BasketController();

        $this->assertEquals(0,$controller->existAllElements($basket, $userBasket));
    }

    /*
     * Проверяем работу метода, проверяющего наличие одного совпадения шаров в пользовательской
     * и некоторой корзине, позитивное тестирование
     */
    public function testingExistSingleElement()
    {
        $userBasket = [1,2,3,4,5,6,9,20];
        $basket = [0,3,21,50];

        $controller = new BasketController();

        $this->assertEquals(1,$controller->existSingleElement($basket, $userBasket));
    }

    /*
     * Проверяем работу метода, проверяющего наличие одного совпадения шаров в пользовательской
     * и некоторой корзине, негативное тестирование (два совпадения)
     */
    public function testingNotExistSingleElement()
    {
        $userBasket = [1,2,3,4,5,6,9,20];
        $basket = [0,3,4,50];

        $controller = new BasketController();

        $this->assertEquals(0,$controller->existSingleElement($basket, $userBasket));
    }

    /*
     * Проверяем работу метода, проверяющего наличие одного совпадения шаров в пользовательской
     * и некоторой корзине, негативное тестирование (нет совпадений)
     */
    public function testingNotExistSingleElement2()
    {
        $userBasket = [1,2,3,4,5,6,9,20];
        $basket = [0,7,8,50];

        $controller = new BasketController();

        $this->assertEquals(0,$controller->existSingleElement($basket, $userBasket));
    }
}