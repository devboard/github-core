<?php

declare (strict_types = 1);
namespace DevBoardLib\GithubCore\ExternalServices;

/**
 * Creates ExternalService value objects from given context string in GitHubCommitStatus.
 */
class ExternalServiceFactory
{
    public function create(string $context) : ExternalService
    {
        if (ExternalService::CIRCLE_CI === $context) {
            return new CircleCi();
        } elseif (ExternalService::COVERALLS === $context) {
            return new Coveralls();
        } elseif (ExternalService::SCRUTINIZER_CI === $context) {
            return new ScrutinizerCi();
        } elseif (ExternalService::SEMAPHORE_CI === $context) {
            return new SemaphoreCi();
        } elseif (ExternalService::SHIPPABLE_CI === $context) {
            return new ShippableCi();
        } elseif (ExternalService::TRAVIS_CI_PULL_REQUEST === $context) {
            return new TravisCiPullRequest();
        } elseif (ExternalService::TRAVIS_CI_PUSH === $context) {
            return new TravisCiPush();
        }

        return new UnsupportedService($context);
    }
}
