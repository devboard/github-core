<?php

namespace spec\DevBoardLib\GithubCore\User\Type;

use DevBoardLib\GithubCore\User\Type\GithubTypeOrganization;
use DevBoardLib\GithubCore\User\Type\GithubTypeUser;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubTypeFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\User\Type\GithubTypeFactory');
    }

    public function it_will_create_github_type_organization_value_object()
    {
        $this->create('Organization')->shouldReturnAnInstanceOf(GithubTypeOrganization::class);
    }

    public function it_will_create_github_type_user_value_object()
    {
        $this->create('User')->shouldReturnAnInstanceOf(GithubTypeUser::class);
    }

    public function it_will_throw_exception_creating_anything_else()
    {
        $this->shouldThrow('Exception')->duringCreate('something');
    }
}
