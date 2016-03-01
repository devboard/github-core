<?php

namespace spec\DevBoardLib\GithubCore\PullRequest\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubPullRequestOpenStateSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestOpenState');
        $this->shouldHaveType('DevBoardLib\GithubCore\PullRequest\State\GithubPullRequestState');
    }

    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('open');
    }
}
