<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\CommitStatus\State;

use DevBoardLib\GithubCore\CommitStatus\State;

class Success implements State
{
    public function __toString() : string
    {
        return self::SUCCESS;
    }
}
