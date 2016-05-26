<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\Commit;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitShaSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Commit\GithubCommitSha');
        $this->shouldHaveType('DevBoardLib\GithubCore\Identifier');
    }

    public function let()
    {
        $this->beConstructedWith('sha23231231');
    }
    public function it_gives_access_to_id()
    {
        $this->getId()->shouldReturn('sha23231231');
    }

    public function it_has_to_string_conversion()
    {
        $this->__toString()->shouldReturn('sha23231231');
    }
}
