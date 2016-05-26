<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\CommitStatus;

interface State
{
    const PENDING = 'pending';
    const SUCCESS = 'success';
    const FAILURE = 'failure';
    const ERROR   = 'error';
}
