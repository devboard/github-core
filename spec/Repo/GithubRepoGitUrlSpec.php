<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\Repo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoGitUrlSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('git://..');
    }
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoGitUrl');
    }
    public function it_has_to_string()
    {
        $this->__toString()->shouldReturn('git://..');
    }
}
