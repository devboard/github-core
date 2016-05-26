<?php

declare (strict_types = 1);
namespace spec\DevBoardLib\GithubCore\Commit;

use DevBoardLib\GithubCore\Commit\GithubCommit;
use DevBoardLib\GithubCore\Commit\GithubCommitAuthor;
use DevBoardLib\GithubCore\Commit\GithubCommitCommitter;
use DevBoardLib\GithubCore\Commit\GithubCommitSha;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Commit\GithubCommitSource');
        $this->shouldHaveType(GithubCommit::class);
    }

    public function let(
        GithubCommitSha $sha,
        GithubRepoId $githubRepoId,
        GithubCommitAuthor $author,
        GithubCommitCommitter $committer
    ) {
        $this->beConstructedWith($sha, $githubRepoId, $author, $committer, $message = 'Commit message');
    }

    public function it_holds_repo_id_it_belongs_to($githubRepoId)
    {
        $this->getGithubRepoId()->shouldReturn($githubRepoId);
    }

    public function it_holds_commit_sha($sha)
    {
        $this->getSha()->shouldReturn($sha);
    }

    public function it_holds_author($author)
    {
        $this->getAuthor()->shouldReturn($author);
    }

    public function it_holds_committer($committer)
    {
        $this->getCommitter()->shouldReturn($committer);
    }

    public function it_holds_commit_message()
    {
        $this->getMessage()->shouldReturn('Commit message');
    }
}
