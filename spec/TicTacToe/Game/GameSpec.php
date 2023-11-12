<?php

namespace spec\App\TicTacToe\Game;

use App\TicTacToe\Game\Game;
use PhpSpec\ObjectBehavior;

class GameSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(Game::class);
    }
}
