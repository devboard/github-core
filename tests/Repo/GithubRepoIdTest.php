<?php
namespace tests\DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Repo\GithubRepoId;

class GithubRepoIdTest extends \PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $target = new GithubRepoId(123);

        self::assertSame('123', (string) $target);
    }
}
