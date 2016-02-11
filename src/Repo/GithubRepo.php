<?php
namespace DevBoardLib\GithubCore\Repo;

interface GithubRepo
{
    public function getOwner();

    public function getName();
}
