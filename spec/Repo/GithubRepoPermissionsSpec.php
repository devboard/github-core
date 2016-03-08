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

    public function let($admin, $push, $read)
    {
        $this->beConstructedWith($admin, $push, $read);
    }

    public function it_exposes_all_constructor_params_via_getters(
        $admin,
        $push,
        $read
    ) {
        $this->isAdmin()->shouldReturn($admin);
        $this->isPushAllowed()->shouldReturn($push);
        $this->isReadAllowed()->shouldReturn($read);
    }
}
