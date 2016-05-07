<?php

namespace spec\DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Repo\GithubRepoOwner;
use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoOwnerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoOwner');
        $this->shouldHaveType(GithubUser::class);
    }

    public function let(GithubUserId $githubUserId)
    {
        $githubUserId->__toString()->willReturn('6789');

        $this->beConstructedWith(
            $githubUserId,
            $username = 'username',
            $email = 'john.doe@example.com',
            $name = 'John Doe',
            $avatarUrl = 'http://...'
        );
    }

    public function it_exposes_all_constructor_params_via_getters($githubUserId)
    {
        $this->getGithubUserId()->shouldReturn($githubUserId);
        $this->getUsername()->shouldReturn('username');
        $this->getEmail()->shouldReturn('john.doe@example.com');
        $this->getName()->shouldReturn('John Doe');
        $this->getAvatarUrl()->shouldReturn('http://...');
    }

    public function it_can_be_serialized_and_deserialized()
    {
        $serialized = $this->serialize();
        $result     = $this->deserialize($serialized);

        $result->shouldBeAnInstanceOf(GithubRepoOwner::class);
    }
}
