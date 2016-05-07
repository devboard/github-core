<?php

namespace DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;
use DevBoardLib\GithubCore\User\Type\GithubType;
use DevBoardLib\GithubCore\User\Type\GithubTypeFactory;

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
    private $avatarUrl;
    /** @var GithubType */
    private $type;

    /**
     * GithubUserSource constructor.
     *
     * @param GithubUserId $githubUserId
     * @param string       $username
     * @param string       $avatarUrl
     * @param GithubType   $type
     */
    public function __construct(
        GithubUserId $githubUserId,
        string $username,
        string $avatarUrl,
        GithubType $type
    ) {
        $this->githubUserId = $githubUserId;
        $this->username     = $username;
        $this->avatarUrl    = $avatarUrl;
        $this->type         = $type;
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
     */
    public function getEmail()
    {
        return null;
    }

    /**
     */
    public function getName()
    {
        return null;
    }

    /**
     * @return GithubType
     */
    public function getType() : GithubType
    {
        return $this->type;
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
            'avatarUrl'    => $this->avatarUrl,
            'type'         => (string) $this->type,
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
            $data['avatarUrl'],
            GithubTypeFactory::create($data['type'])
        );
    }
}
