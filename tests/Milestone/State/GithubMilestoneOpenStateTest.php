<?php

namespace tests\DevBoardLib\GithubCore\Milestone\State;

use DevBoardLib\GithubCore\Milestone\State\GithubMilestoneOpenState;

/**
 * Class GithubMilestoneOpenStateTest.
 */
class GithubMilestoneOpenStateTest extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        $target = new GithubMilestoneOpenState();

        self::assertSame('open', (string) $target);
    }
}
