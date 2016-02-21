<?php
namespace spec\DevBoardLib\GithubCore\Commit;

use DateTime;
use DevBoardLib\GithubCore\Commit\GithubCommitId;
use DevBoardLib\GithubCore\Commit\GithubCommitSha;
use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubCommitSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Commit\GithubCommitSource');
        $this->shouldHaveType('DevBoardLib\GithubCore\Commit\GithubCommit');
    }

    public function let(
        GithubCommitId $id,
        GithubRepo $repo,
        GithubCommitSha $sha,
        GithubUser $author,
        DateTime $authorDate,
        GithubUser $committer,
        DateTime $committerDate,
        $githubCommitState
    ) {
        $this->beConstructedWith(
            $id,
            $repo,
            $sha,
            $author,
            $authorDate,
            $committer,
            $committerDate,
            'message',
            $githubCommitState
        );
    }

    public function it_has_primary_key($id)
    {
        $this->getId()->shouldReturn($id);
    }

    public function it_holds_repo_id_it_belongs_to($repo, GithubRepoId $repoId)
    {
        $repo->getId()->willReturn($repoId);
        $this->getRepoId()->shouldReturn($repoId);
    }

    public function it_holds_repo_it_belongs_to($repo)
    {
        $this->getRepo()->shouldReturn($repo);
    }

    public function it_holds_commit_sha($sha)
    {
        $this->getSha()->shouldReturn($sha);
    }

    public function it_holds_author($author, GithubUserId $authorId)
    {
        $author->getGithubUserId()->willReturn($authorId);
        $this->getAuthor()->shouldReturn($author);
        $this->getAuthorId()->shouldReturn($authorId);
    }

    public function it_holds_authored_datetime($authorDate)
    {
        $this->getAuthorDate()->shouldReturn($authorDate);
    }

    public function it_holds_committer($committer, GithubUserId $committerId)
    {
        $committer->getGithubUserId()->willReturn($committerId);
        $this->getCommitter()->shouldReturn($committer);
        $this->getCommitterId()->shouldReturn($committerId);
    }

    public function it_holds_committer_datetime($committerDate)
    {
        $this->getCommitterDate()->shouldReturn($committerDate);
    }

    public function it_holds_commit_message()
    {
        $this->getMessage()->shouldReturn('message');
    }

    public function it_holds_github_commit_state($githubCommitState)
    {
        $this->getGithubCommitState()->shouldReturn($githubCommitState);
    }
}
