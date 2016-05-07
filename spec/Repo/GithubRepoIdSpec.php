<?php

namespace spec\DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Identifier;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoIdSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoId');
        $this->shouldHaveType(Identifier::class);
    }

    public function let()
    {
        $this->beConstructedWith(123);
    }

    public function it_has_to_string_conversion()
    {
        $this->__toString()->shouldReturn('123');
    }
}
