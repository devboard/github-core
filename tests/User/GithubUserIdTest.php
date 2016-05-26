<?php

declare (strict_types = 1);
namespace tests\DevBoardLib\GithubCore\User;

use DevBoardLib\GithubCore\User\GithubUserId;

/**
 * Class GithubUserIdTest.
 */
class GithubUserIdTest extends \PHPUnit_Framework_TestCase
{
    public function testSimple()
    {
        $target = new GithubUserId(123);

        self::assertSame('123', (string) $target);
    }
}
