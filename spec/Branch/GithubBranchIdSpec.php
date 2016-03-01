<?php

namespace spec\DevBoardLib\GithubCore\Branch;

use DevBoardLib\GithubCore\Repo\GithubRepoId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubBranchIdSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Branch\GithubBranchId');
        $this->shouldHaveType('DevBoardLib\GithubCore\Identifier');
    }

    public function let(GithubRepoId $githubRepoId)
    {
        $githubRepoId->__toString()->willReturn(123);
        $this->beConstructedWith($githubRepoId, 'master');
    }

    public function it_has_to_string_conversion()
    {
        $this->__toString()->shouldReturn('123-master');
    }
}
