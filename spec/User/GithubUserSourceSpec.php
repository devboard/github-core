<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\User;

use DevBoardLib\GithubCore\User\GithubUserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubUserSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\User\GithubUserSource');
        $this->shouldHaveType('DevBoardLib\GithubCore\User\GithubUser');
    }

    public function let(GithubUserId $githubUserId)
    {
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
}
