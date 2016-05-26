<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\CommitStatus;

use DevBoardLib\GithubCore\CommitStatus\State\Error;
use DevBoardLib\GithubCore\CommitStatus\State\Failure;
use DevBoardLib\GithubCore\CommitStatus\State\Pending;
use DevBoardLib\GithubCore\CommitStatus\State\Success;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StateFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\CommitStatus\StateFactory');
    }

    public function it_should_create_value_objects_from_given_strings()
    {
        $this->create('pending')->shouldReturnAnInstanceOf(Pending::class);
        $this->create('success')->shouldReturnAnInstanceOf(Success::class);
        $this->create('failure')->shouldReturnAnInstanceOf(Failure::class);
        $this->create('error')->shouldReturnAnInstanceOf(Error::class);
    }

    public function it_should_throw_exception_for_unknown_string()
    {
        $this->shouldThrow('Exception')->duringCreate('something');
    }
}
