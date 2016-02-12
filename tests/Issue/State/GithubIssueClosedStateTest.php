<?php
namespace tests\DevBoardLib\GithubCore\Issue\State;

use DevBoardLib\GithubCore\Issue\State\GithubIssueClosedState;

/**
 * Class GithubIssueClosedStateTest.
 */
class GithubIssueClosedStateTest extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        $target = new GithubIssueClosedState();

        self::assertSame('closed', (string) $target);
    }
}
