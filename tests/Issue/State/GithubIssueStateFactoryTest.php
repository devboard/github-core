<?php

namespace tests\DevBoardLib\GithubCore\Issue\State;

use DevBoardLib\GithubCore\Issue\State\GithubIssueStateFactory;

/**
 * Class GithubIssueStateFactoryTest.
 */
class GithubIssueStateFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateOfOpenIssue()
    {
        self::assertInstanceOf(
            'DevBoardLib\GithubCore\Issue\State\GithubIssueOpenState',
            GithubIssueStateFactory::create('open')
        );
    }

    public function testCreateOfClosedIssue()
    {
        self::assertInstanceOf(
            'DevBoardLib\GithubCore\Issue\State\GithubIssueClosedState',
            GithubIssueStateFactory::create('closed')
        );
    }

    public function testCreateThrowsExceptionOnUnsupportedValue()
    {
        $this->setExpectedException('\Exception');
        GithubIssueStateFactory::create('unsupported-value');
    }
}
