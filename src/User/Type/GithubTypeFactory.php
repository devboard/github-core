<?php

namespace DevBoardLib\GithubCore\User\Type;

/**
 * @todo: Reason this class exists
 */
class GithubTypeFactory
{
    /**
     * @param string $typeName
     *
     * @throws \Exception
     *
     * @return GithubTypeOrganization|GithubTypeUser
     */
    public static function create(string $typeName)
    {
        if ('Organization' === $typeName) {
            return new GithubTypeOrganization();
        } elseif ('User' === $typeName) {
            return new GithubTypeUser();
        } else {
            throw new \Exception('Unknown github user type:'.$typeName);
        }
    }
}
