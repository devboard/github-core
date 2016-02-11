<?php
namespace tests\DevBoardLib\GithubCore\Milestone;

use DevBoardLib\GithubCore\Milestone\GithubMilestoneId;

class GithubMilestoneIdTest extends \PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $target = new GithubMilestoneId(123);

        self::assertSame('123', (string) $target);
    }
}
