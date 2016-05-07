<?php

namespace DevBoardLib\GithubCore\User\Type;

/**
 * @todo: Reason this class exists
 */
class GithubTypeUser implements GithubType
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'User';
    }
}
