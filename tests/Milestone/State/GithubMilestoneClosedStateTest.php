<?php

namespace tests\DevBoardLib\GithubCore\Milestone\State;

use DevBoardLib\GithubCore\Milestone\State\GithubMilestoneClosedState;

/**
 * Class GithubMilestoneClosedStateTest.
 */
class GithubMilestoneClosedStateTest extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        $target = new GithubMilestoneClosedState();

        self::assertSame('closed', (string) $target);
    }
}
