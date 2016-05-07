<?php

namespace spec\DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Identifier;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoNameSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoName');
        $this->shouldHaveType(Identifier::class);
    }

    public function let()
    {
        $this->beConstructedWith('library');
    }

    public function it_has_name_getter()
    {
        $this->getName()->shouldReturn('library');
    }

    public function it_has_to_string()
    {
        $this->__toString()->shouldReturn('library');
    }
}
