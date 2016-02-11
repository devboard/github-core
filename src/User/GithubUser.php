<?php
namespace DevBoardLib\GithubCore\User;

use DevBoardLib\GithubCore\User\GithubUserId;

interface GithubUser
{
    /** @return GithubUserId */
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
