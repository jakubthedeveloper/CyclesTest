<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\TestCase;
use Foo\Cycles;

class CyclesTest extends TestCase
{
    public function test_non_optimized_returns_correct_values()
    {
        $worker = new Cycles;

        for ($i = 0; $i < 9; $i++) {
            $rounds = pow(9, $i);

            $result = $worker->rotateInLoop($rounds);

            $this->assertEquals($result, ($rounds % 4) * 90);
        }
    }

    public function test_optimized_returns_correct_values()
    {
        $worker = new Cycles;

        for ($i = 0; $i < 9; $i++) {
            $rounds = pow(9, $i);

            $result = $worker->rotateOptimized($rounds);

            $this->assertEquals($result, ($rounds % 4) * 90);
        }
    }
}
