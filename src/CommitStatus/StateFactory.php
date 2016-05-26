<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\CommitStatus;

use DevBoardLib\GithubCore\CommitStatus\State;
use DevBoardLib\GithubCore\CommitStatus\State\Error;
use DevBoardLib\GithubCore\CommitStatus\State\Failure;
use DevBoardLib\GithubCore\CommitStatus\State\Pending;
use DevBoardLib\GithubCore\CommitStatus\State\Success;

class StateFactory
{
    public function create(string $text) : State
    {
        if (State::PENDING === $text) {
            return new Pending();
        } elseif (State::SUCCESS === $text) {
            return new Success();
        } elseif (State::FAILURE === $text) {
            return new Failure();
        } elseif (State::ERROR === $text) {
            return new Error();
        }

        throw new \Exception('ERR 213124124: Unknown GitHubCommitStatus state:'.$text);
    }
}
