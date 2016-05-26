<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\ExternalServices;

interface ExternalService
{
    const CIRCLE_CI              = 'ci/circleci';
    const COVERALLS              = 'coverage/coveralls';
    const SCRUTINIZER_CI         = 'Scrutinizer';
    const SEMAPHORE_CI           = 'semaphoreci';
    const SHIPPABLE_CI           = 'Shippable';
    const TRAVIS_CI_PULL_REQUEST = 'continuous-integration/travis-ci/pr';
    const TRAVIS_CI_PUSH         = 'continuous-integration/travis-ci/push';

    public function __toString() : string;
}
