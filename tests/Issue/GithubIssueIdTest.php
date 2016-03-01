<?php

namespace tests\DevBoardLib\GithubCore\Issue;

use DevBoardLib\GithubCore\Issue\GithubIssueId;

/**
 * Class GithubIssueIdTest.
 */
class GithubIssueIdTest extends \PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $target = new GithubIssueId(123);

        self::assertSame('123', (string) $target);
    }
}
