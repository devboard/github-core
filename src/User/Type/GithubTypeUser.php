<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\User\Type;

/**
 * @todo: Reason this class exists
 */
class GithubTypeUser implements GithubType
{
    /**
     * @return string
     */
    public function __toString() : string
    {
        return 'User';
    }
}
