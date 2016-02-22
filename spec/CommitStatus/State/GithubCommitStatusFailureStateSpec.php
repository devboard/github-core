<?php
namespace spec\DevBoardLib\GithubCore\CommitStatus\State;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitStatusFailureStateSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusFailureState');
        $this->shouldHaveType('DevBoardLib\GithubCore\CommitStatus\State\GithubCommitStatusState');
    }

    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('failure');
    }
}
