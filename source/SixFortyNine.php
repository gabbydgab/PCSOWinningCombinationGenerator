<?php

declare(strict_types = 1);

namespace SupperLotto;

final class SixFortyNine implements WinningCombo
{
    private static $drawedNumber = [];
    private static $combination;

    public static function winningCombo() : string
    {
        self::firstNumber();
        self::secondNumber();
        self::thirdNumber();
        self::fourthNumber();
        self::fifthNumber();
        self::sixthNumber();

        return (string) self::$combination;
    }

    private static function firstNumber() : void
    {
        self::$combination = self::drawNumber();
    }

    private static function secondNumber() : void
    {
        self::$combination .= "-" . self::drawNumber();
    }

    private static function thirdNumber() : void
    {
        self::$combination .= "-" . self::drawNumber();
    }

    private static function fourthNumber() : void
    {
        self::$combination .= "-" . self::drawNumber();
    }

    private static function fifthNumber() : void
    {
        self::$combination .= "-" . self::drawNumber();
    }

    private static function sixthNumber() : void
    {
        self::$combination .= "-" . self::drawNumber();
    }

    private static function drawNumber() : int
    {
        $number = random_int(1, 99);

        if (!in_array($number, self::$drawedNumber)) {
            array_push(self::$drawedNumber, $number);
            return $number;
        }

        return 0;
    }
}