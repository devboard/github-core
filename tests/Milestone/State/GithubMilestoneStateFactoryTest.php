<?php

namespace tests\DevBoardLib\GithubCore\Milestone\State;

use DevBoardLib\GithubCore\Milestone\State\GithubMilestoneStateFactory;

/**
 * Class GithubMilestoneStateFactoryTest.
 */
class GithubMilestoneStateFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateOfOpenMilestone()
    {
        self::assertInstanceOf(
            'DevBoardLib\GithubCore\Milestone\State\GithubMilestoneOpenState',
            GithubMilestoneStateFactory::create('open')
        );
    }

    public function testCreateOfClosedMilestone()
    {
        self::assertInstanceOf(
            'DevBoardLib\GithubCore\Milestone\State\GithubMilestoneClosedState',
            GithubMilestoneStateFactory::create('closed')
        );
    }

    public function testCreateThrowsExceptionOnUnsupportedValue()
    {
        $this->setExpectedException('\Exception');
        GithubMilestoneStateFactory::create('unsupported-value');
    }
}
