<?php

namespace spec\DevBoardLib\GithubCore\Repo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoSshUrlSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('ssh://..');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoSshUrl');
    }

    public function it_has_to_string()
    {
        $this->__toString()->shouldReturn('ssh://..');
    }
}
