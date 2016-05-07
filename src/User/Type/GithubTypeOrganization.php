<?php

namespace DevBoardLib\GithubCore\User\Type;

/**
 * @todo: Reason this class exists
 */
class GithubTypeOrganization implements GithubType
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'Organization';
    }
}
