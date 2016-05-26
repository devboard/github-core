<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\PullRequest\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubPullRequestClosedStateSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestClosedState');
        $this->shouldHaveType('DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestState');
    }

    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('closed');
    }
}
