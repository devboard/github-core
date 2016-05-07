<?php

namespace spec\DevBoardLib\GithubCore\Commit;

use DevBoardLib\GithubCore\Commit\GithubCommitCommitter;
use DevBoardLib\GithubCore\User\GithubUserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitCommitterSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Commit\GithubCommitCommitter');
    }

    public function let(GithubUserId $githubUserId)
    {
        $githubUserId->__toString()->willReturn('6789');

        $this->beConstructedWith(
            $name = 'John Doe',
            $email = 'jdoe@example.com',
            $githubUserId,
            $username = 'username',
            $avatarUrl = 'http://..'
        );
    }

    public function it_will_expose_properties($githubUserId)
    {
        $this->getGithubUserId()->shouldReturn($githubUserId);
        $this->getUsername()->shouldReturn('username');
        $this->getEmail()->shouldReturn('jdoe@example.com');
        $this->getName()->shouldReturn('John Doe');
        $this->getAvatarUrl()->shouldReturn('http://..');
    }

    public function it_can_be_serialized_and_deserialized()
    {
        $serialized = $this->serialize();
        $result     = $this->deserialize($serialized);

        $result->shouldBeAnInstanceOf(GithubCommitCommitter::class);
    }
}
