<?php

namespace spec\DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Identifier;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoFullNameSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoFullName');
        $this->shouldHaveType(Identifier::class);
    }

    public function let()
    {
        $this->beConstructedWith('owner/library');
    }

    public function it_has_full_name_getter()
    {
        $this->getFullName()->shouldReturn('owner/library');
    }
    public function it_has_to_string()
    {
        $this->__toString()->shouldReturn('owner/library');
    }
}
