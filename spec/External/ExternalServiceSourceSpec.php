<?php

namespace spec\DevBoardLib\GithubCore\External;

use DevBoardLib\GithubCore\External\ExternalServiceId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExternalServiceSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\External\ExternalServiceSource');
        $this->shouldHaveType('DevBoardLib\GithubCore\External\ExternalService');
    }

    public function let(ExternalServiceId $externalServiceId)
    {
        $this->beConstructedWith($externalServiceId, 'name');
    }

    public function it_has_context_as_primary_key($externalServiceId)
    {
        $this->getId()->shouldReturn($externalServiceId);
    }

    public function it_holds_service_name()
    {
        $this->getName()->shouldReturn('name');
    }
}
