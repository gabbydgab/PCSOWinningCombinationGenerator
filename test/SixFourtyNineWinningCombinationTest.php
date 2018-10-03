<?php

declare(strict_types = 1);

namespace SupperLottoTest;

use PHPUnit\Framework\TestCase;
use SupperLotto\SixFortyNine;

final class SixFortyNineWinningCombinationTest extends TestCase
{
    /**
     * @test
     */
    public function showSixFortyNineWinningCombination(): void
    {
        var_dump(SixFortyNine::winningCombo());
        $this->assertTrue(true, SixFortyNine::winningCombo());
    }
}