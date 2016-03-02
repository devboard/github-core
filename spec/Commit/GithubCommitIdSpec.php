<?php

namespace spec\DevBoardLib\GithubCore\Commit;

use DevBoardLib\GithubCore\Commit\GithubCommitSha;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitIdSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Commit\GithubCommitId');
        $this->shouldHaveType('DevBoardLib\GithubCore\Identifier');
    }

    public function let(GithubRepoId $githubRepoId, GithubCommitSha $githubCommitSha)
    {
        $githubRepoId->__toString()->willReturn(123);
        $githubCommitSha->__toString()->willReturn('sha23231231');
        $this->beConstructedWith($githubRepoId, $githubCommitSha);
    }

    public function it_has_to_string_conversion()
    {
        $this->__toString()->shouldReturn('123-sha23231231');
    }

    public function it_can_create_instance_from_value()
    {
        $result = $this->createFromValue('123-sha23231231');

        $result->shouldBeAnInstanceOf('DevBoardLib\GithubCore\Commit\GithubCommitId');
    }
}
