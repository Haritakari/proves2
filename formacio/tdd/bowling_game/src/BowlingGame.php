<?php

declare(strict_types=1);

namespace bowling_game\src;

final class BowlingGame
{
    const MAX_ROLLS = 21;
    const SPARE = 10;
    const STRIKE = 10;
    private $scores = [];
    private $actualRoll = 0;

    public function __construct()
    {
        for ($i = 1; $i <= self::MAX_ROLLS; $i++) {
            $this->scores[] = 0;
        }
    }

    public function roll($pins)
    {
        $this->scores[$this->actualRoll] = $pins;
        $this->actualRoll++;
    }

    public function score()
    {
        $score = 0;
        $position = 0;
        for ($i = 1; $i <= 10; $i++) {
            if ($this->isStrike($position)) {
                $score += $this->scores[$position] + $this->scores[$position + 1] + $this->scores[$position + 2];
                $position += 1;
                continue;
            }

            if ($this->isSpare($position)) {
                $score += $this->scores[$position] + $this->scores[$position + 1] + $this->scores[$position + 2];
                $position += 2;
                continue;
            }
            $score += $this->scores[$position] + $this->scores[$position + 1];
            $position += 2;
        }

        return $score;
    }

    private function isSpare(int $position): bool
    {
        return $this->scores[$position] + $this->scores[$position + 1] === self::SPARE;
    }

    private function isStrike(int $position): bool
    {
        return $this->scores[$position] === self::STRIKE;
    }
}
