<?php

namespace DevBoardLib\GithubCore\Commit;

use DevBoardLib\GithubCore\User\GithubUserId;

/**
 * @todo: Reason this class exists
 */
class GithubCommitAuthor
{
    /** @var string */
    private $name;
    /** @var string */
    private $email;
    /** @var GithubUserId */
    private $githubUserId;
    /** @var string */
    private $username;
    /** @var string */
    private $avatarUrl;

    /**
     * Author constructor.
     *
     * @param $name
     * @param $email
     * @param $githubUserId
     * @param $username
     * @param $avatarUrl
     */
    public function __construct(
        string $name,
        string $email,
        GithubUserId $githubUserId = null,
        string $username = null,
        string $avatarUrl = null
    ) {
        $this->name         = $name;
        $this->email        = $email;
        $this->githubUserId = $githubUserId;
        $this->username     = $username;
        $this->avatarUrl    = $avatarUrl;
    }

    /** @return string */
    public function getName() : string
    {
        return $this->name;
    }

    /** @return string */
    public function getEmail() : string
    {
        return $this->email;
    }

    /** @return GithubUserId */
    public function getGithubUserId() : GithubUserId
    {
        return $this->githubUserId;
    }

    /** @return string */
    public function getUsername() : string
    {
        return $this->username;
    }

    /** @return string */
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }

    /** @return array */
    public function serialize()
    {
        return [
            'name'         => $this->name,
            'email'        => $this->email,
            'githubUserId' => (string) $this->githubUserId,
            'username'     => $this->username,
            'avatarUrl'    => $this->avatarUrl,
        ];
    }

    /**
     * @param array $data
     *
     * @throws \Exception
     *
     * @return static
     */
    public static function deserialize(array $data)
    {
        return new static(
            $data['name'],
            $data['email'],
            self::unSerializeId($data['githubUserId']),
            $data['username'],
            $data['avatarUrl']
        );
    }

    /**
     * @param $id
     *
     * @return GithubUserId|null
     */
    private static function unSerializeId($id)
    {
        if (null === $id) {
            return null;
        }

        return new GithubUserId((int) $id);
    }
}
