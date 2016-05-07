<?php

namespace spec\DevBoardLib\GithubCore\Repo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoPermissionsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoPermissions');
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoPermissonsInterface');
    }

    public function let()
    {
        $this->beConstructedWith($admin = false, $push = false, $read = false);
    }

    public function it_exposes_all_constructor_params_via_getters()
    {
        $this->isAdmin()->shouldReturn(false);
        $this->isPushAllowed()->shouldReturn(false);
        $this->isReadAllowed()->shouldReturn(false);
    }
}
