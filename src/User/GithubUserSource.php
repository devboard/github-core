<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\User;

/**
 * Class GithubUserSource.
 */
class GithubUserSource implements GithubUser
{
    /** @var GithubUserId */
    private $githubUserId;
    /** @var string */
    private $username;
    /** @var string */
    private $email;
    /** @var string */
    private $name;
    /** @var string */
    private $avatarUrl;

    /**
     * GithubUserSource constructor.
     *
     * @param GithubUserId $githubUserId
     * @param string       $username
     * @param string       $email
     * @param string       $name
     * @param string       $avatarUrl
     */
    public function __construct(
        GithubUserId $githubUserId,
        string $username,
        string $email = null,
        string $name = null,
        string $avatarUrl = null
    ) {
        $this->githubUserId = $githubUserId;
        $this->username     = $username;
        $this->email        = $email;
        $this->name         = $name;
        $this->avatarUrl    = $avatarUrl;
    }

    /**
     * @return GithubUserId
     */
    public function getGithubUserId() : GithubUserId
    {
        return $this->githubUserId;
    }

    /**
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }
}
