<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        $userBasketCount = 100;
        $basketCount = 31;

        $taskB = "";
        $taskC = "";
        $userBasket = BasketController::fillBasket($userBasketCount);
        $baskets = [];

        for ($i = 1; $i < $basketCount + 1; $i++) {
            $basket = BasketController::fillBasket(rand(1, 9));
            $baskets[$i] = $basket;
            if (BasketController::existAllElements($basket, $userBasket) === 1) {
                $taskB .= "#$i ";
            }
            if (BasketController::existSingleElement($basket, $userBasket) === 1) {
                $taskC .= "#$i ";
            }
        }

        return view('basket.index', compact('userBasket', 'baskets',
            'taskB', 'taskC'));
    }

    /*public function index2(Request $request)
    {
        $userBasketCount = $request->input(userBasketCount,100);
        $basketCount = $request->input(basketCount,30);

        $taskB = "";
        $taskC = "";
        $userBasket = BasketController::fillBasket($userBasketCount);
        $baskets = [];

        for ($i = 1; $i < $basketCount + 1; $i++) {
            $basket = BasketController::fillBasket(rand(1, 9));
            $baskets[$i] = $basket;
            if (BasketController::existAllElements($basket, $userBasket) === 1) {
                $taskB .= "#$i ";
            }
            if (BasketController::existSingleElement($basket, $userBasket) === 1) {
                $taskC .= "#$i ";
            }
        }

        return view('basket.index', compact('userBasket', 'baskets',
            'taskB', 'taskC'));
    }*/

    public function fillBasket(int $value)
    {
        $balls = [];
        for ($i = 1; $i < $value; $i++) {
            $ball = rand(1, 999);
            if (!in_array($ball, $balls, true)) {
                $balls[] = $ball;
            }
        }
        if (count($balls) === 0)
            $balls[] = rand(1, 999);

        return $balls;
    }

    function existAllElements(array $basket, array $userBasket)
    {
        $coincidence = 0;
        foreach ($basket as $value1) {
            foreach ($userBasket as $value2) {
                if ((int)$value1 === (int)$value2) {
                    $coincidence++;
                }
            }
        }

        if ($coincidence === count($basket))
            return 1;
        else
            return 0;
    }

    function existSingleElement(array $basket, array $userBasket)
    {
        $count = 0;
        foreach ($basket as $value1) {
            foreach ($userBasket as $value2) {
                if ((int)$value1 === (int)$value2) {
                    $count++;
                    if ($count > 1) {
                        return 0;
                    }
                }
            }
        }
        if ($count === 0)
            return 0;
        return 1;
    }

    public function printBasket($title, $balls)
    {
        $text = "$title: ";
        foreach ($balls as $value) {
            $text .= "$value, ";
        }
        return $text;
    }
}
