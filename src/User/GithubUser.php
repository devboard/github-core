<?php

namespace DevBoardLib\GithubCore\User;

/**
 * Interface GithubUser.
 */
interface GithubUser
{
    /** @return \DevBoardLib\GithubCore\User\GithubUserId */
    public function getGithubUserId();

    /** @return string */
    public function getUsername();

    /** @return string */
    public function getEmail();

    /** @return string */
    public function getName();

    /** @return string */
    public function getAvatarUrl();
}
