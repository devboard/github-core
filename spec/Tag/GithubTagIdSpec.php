<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\Tag;

use DevBoardLib\GithubCore\Repo\GithubRepoId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubTagIdSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Tag\GithubTagId');
        $this->shouldHaveType('DevBoardLib\GithubCore\Identifier');
    }

    public function let(GithubRepoId $githubRepoId)
    {
        $githubRepoId->__toString()->willReturn(123);
        $this->beConstructedWith($githubRepoId, '0.2');
    }

    public function it_has_to_string_conversion()
    {
        $this->__toString()->shouldReturn('123-0.2');
    }

    public function it_can_create_instance_from_value()
    {
        $result = $this->createFromValue('123-0.2');

        $result->shouldBeAnInstanceOf('DevBoardLib\GithubCore\Tag\GithubTagId');
    }
}
