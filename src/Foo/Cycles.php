<?php
namespace Foo;

class Cycles {
    public function rotateInLoop(int $times): int {
        $result = 0;
        for ($i = 0; $i < $times; $i++) {
            $result += 90;


            if ($result === 360) {
                $result = 0;
            }
        }

        return $result;
    }

    public function rotateOptimized(int $times): int {
        return ($times % 4) * 90;
    }
}
