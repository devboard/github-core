<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\ExternalServices;

use DevBoardLib\GithubCore\ExternalServices\CircleCi;
use DevBoardLib\GithubCore\ExternalServices\Coveralls;
use DevBoardLib\GithubCore\ExternalServices\ScrutinizerCi;
use DevBoardLib\GithubCore\ExternalServices\SemaphoreCi;
use DevBoardLib\GithubCore\ExternalServices\ShippableCi;
use DevBoardLib\GithubCore\ExternalServices\TravisCiPullRequest;
use DevBoardLib\GithubCore\ExternalServices\TravisCiPush;
use DevBoardLib\GithubCore\ExternalServices\UnsupportedService;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExternalServiceFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\ExternalServices\ExternalServiceFactory');
    }

    public function it_should_create_value_objects_from_given_contexts()
    {
        $this->create('ci/circleci')->shouldReturnAnInstanceOf(CircleCi::class);
        $this->create('continuous-integration/travis-ci/pr')->shouldReturnAnInstanceOf(TravisCiPullRequest::class);
        $this->create('continuous-integration/travis-ci/push')->shouldReturnAnInstanceOf(TravisCiPush::class);
        $this->create('coverage/coveralls')->shouldReturnAnInstanceOf(Coveralls::class);
        $this->create('Scrutinizer')->shouldReturnAnInstanceOf(ScrutinizerCi::class);
        $this->create('semaphoreci')->shouldReturnAnInstanceOf(SemaphoreCi::class);
        $this->create('Shippable')->shouldReturnAnInstanceOf(ShippableCi::class);
    }

    public function it_should_create_unsupported_external_service_if_context_is_not_something_we_already_have()
    {
        $this->create('some-new-service')->shouldReturnAnInstanceOf(UnsupportedService::class);
    }
}
