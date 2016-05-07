<?php

namespace DevBoardLib\GithubCore\Repo;

/**
 * @todo: Reason this class exists
 */
class GithubRepoSshUrl
{
    /**
     * @var string
     */
    private $url;

    /**
     * @param $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->url;
    }
}
