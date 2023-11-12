<?php

namespace TicTacToe\Game;

use PhpSpec\ObjectBehavior;
use TicTacToe\Game\Game;

class GameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Game::class);
    }
}
