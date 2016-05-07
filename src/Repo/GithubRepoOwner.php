<?php

namespace DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;

/**
 * Value object representing github repo owner.
 */
class GithubRepoOwner implements GithubUser
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
        string $email,
        string $name,
        string $avatarUrl
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

    /**
     * @return array
     */
    public function serialize() : array
    {
        return [
            'githubUserId' => (string) $this->githubUserId,
            'username'     => $this->username,
            'email'        => $this->email,
            'name'         => $this->name,
            'avatarUrl'    => $this->avatarUrl,
        ];
    }

    /**
     * @param array $data
     *
     * @return GithubRepoOwner
     */
    public static function deserialize(array  $data) : GithubRepoOwner
    {
        return new static(
            new GithubUserId($data['githubUserId']),
            $data['username'],
            $data['email'],
            $data['name'],
            $data['avatarUrl']
        );
    }
}
