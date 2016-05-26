<?php

declare (strict_types = 1);
namespace tests\DevBoardLib\GithubCore\Issue\State;

use DevBoardLib\GithubCore\Issue\State\GithubIssueOpenState;

/**
 * Class GithubIssueOpenStateTest.
 */
class GithubIssueOpenStateTest extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        $target = new GithubIssueOpenState();

        self::assertSame('open', (string) $target);
    }
}
