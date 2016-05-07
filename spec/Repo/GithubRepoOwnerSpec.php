<?php

namespace spec\DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Repo\GithubRepoOwner;
use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;
use DevBoardLib\GithubCore\User\Type\GithubType;
use DevBoardLib\GithubCore\User\Type\GithubTypeOrganization;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoOwnerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoOwner');
        $this->shouldHaveType(GithubUser::class);
    }

    public function let(GithubUserId $githubUserId, GithubTypeOrganization $githubType)
    {
        $githubUserId->__toString()->willReturn('6789');
        $githubType->__toString()->willReturn('Organization');

        $this->beConstructedWith(
            $githubUserId,
            $username = 'username',
            $avatarUrl = 'http://...',
            $githubType
        );
    }

    public function it_exposes_all_constructor_params_via_getters($githubUserId)
    {
        $this->getGithubUserId()->shouldReturn($githubUserId);
        $this->getUsername()->shouldReturn('username');
        $this->getEmail()->shouldReturn(null);
        $this->getName()->shouldReturn(null);
        $this->getAvatarUrl()->shouldReturn('http://...');
        $this->getType()->shouldReturnAnInstanceOf(GithubType::class);
    }

    public function it_can_be_serialized_and_deserialized()
    {
        $serialized = $this->serialize();
        $result     = $this->deserialize($serialized);

        $result->shouldBeAnInstanceOf(GithubRepoOwner::class);
    }
}
