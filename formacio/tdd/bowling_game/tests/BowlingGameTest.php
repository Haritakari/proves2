<?php

declare(strict_types = 1);

namespace bowling_game\test;

use bowling_game\src\BowlingGame;

class BowlingGameTest extends \PHPUnit\Framework\TestCase
{
    private $game;

    protected function setUp(): void
    {
        $this->game = new BowlingGame();
        parent::setUp();
    }

    /** @test */
    public function standartFrame(): void
    {
         $game = new BowlingGame();
         $game->roll(3);
         $game->roll(7);

         $this->assertEquals(10, $game->score());
    }

    /** @test */
    public function standartGame(): void
    {
        $game = new BowlingGame();

        $this->rolls(20,4);

        $this->assertEquals(80, $this->game->score());
    }

    /** @test */
    public function spare()
    {
        $this->game->roll(5);
        $this->game->roll(5);
        $this->rolls(18,1);

        $this->assertEquals(29, $this->game->score());

    }

    /** @test */
    public function strike()
    {
        $this->game->roll(10);
        $this->rolls(18,1);

        $this->assertEquals(30, $this->game->score());

    }

    /** @test */
    public function bestGame()
    {

        $this->rolls(12,10);
        $this->assertEquals(300, $this->game->score());

    }

    private function rolls($numRolls, $numPins): void
    {
        for ($i = 1; $i <= $numRolls; $i++) {
            $this->game->roll($numPins);
        }


    }
}
