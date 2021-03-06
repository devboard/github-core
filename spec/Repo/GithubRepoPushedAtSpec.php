<?php

namespace spec\DevBoardLib\GithubCore\Repo;

use DateTime;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoPushedAtSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('2010-01-01 11:22:33');
    }
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoPushedAt');
        $this->shouldHaveType(DateTime::class);
    }
    public function it_can_be_converted_to_string()
    {
        $this->__toString()->shouldReturn('2010-01-01 11:22:33');
    }
}
