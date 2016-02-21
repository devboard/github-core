<?php
namespace DevBoardLib\GithubCore\Commit;

use DateTime;
use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\User\GithubUser;
use DevBoardLib\GithubCore\User\GithubUserId;

/**
 * Class GithubCommitSource.
 */
class GithubCommitSource implements GithubCommit
{
    /** @var GithubCommitId */
    protected $id;

    /** @var GithubRepo */
    protected $repo;

    /** @var GithubCommitSha */
    private $sha;

    /** @var string */
    private $authorName;

    /** @var string */
    private $authorEmail;

    /** @var GithubUser */
    private $author;

    /** @var DateTime */
    private $authorDate;

    /** @var GithubUser */
    private $committer;

    /** @var DateTime */
    private $committerDate;

    /** @var string */
    private $message;

    /** @var string */
    private $githubCommitState;

    /**
     * GithubCommitSource constructor.
     *
     * @param GithubCommitId  $id
     * @param GithubRepo      $repo
     * @param GithubCommitSha $sha
     * @param GithubUser      $author
     * @param DateTime        $authorDate
     * @param GithubUser      $committer
     * @param DateTime        $committerDate
     * @param string          $message
     * @param string          $githubCommitState
     */
    public function __construct(
        GithubCommitId $id,
        GithubRepo $repo,
        GithubCommitSha $sha,
        $authorName,
        $authorEmail,
        GithubUser $author = null,
        DateTime $authorDate,
        GithubUser $committer,
        DateTime $committerDate,
        $message,
        $githubCommitState = null
    ) {
        $this->id = $id;
        $this->repo = $repo;
        $this->sha = $sha;
        $this->authorName = $authorName;
        $this->authorEmail = $authorEmail;
        $this->author = $author;
        $this->authorDate = $authorDate;
        $this->committer = $committer;
        $this->committerDate = $committerDate;
        $this->message = $message;
        $this->githubCommitState = $githubCommitState;
    }

    /** @return GithubCommitId */
    public function getId()
    {
        return $this->id;
    }

    /** @return GithubRepoId */
    public function getRepoId()
    {
        return $this->repo->getId();
    }

    /** @return GithubRepo */
    public function getRepo()
    {
        return $this->repo;
    }

    /** @return GithubCommitSha */
    public function getSha()
    {
        return $this->sha;
    }

    /**
     * @return string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @return string
     */
    public function getAuthorEmail()
    {
        return $this->authorEmail;
    }

    /** @return GithubUserId */
    public function getAuthorId()
    {
        return $this->author->getGithubUserId();
    }

    /** @return GithubUser */
    public function getAuthor()
    {
        return $this->author;
    }

    /** @return DateTime */
    public function getAuthorDate()
    {
        return $this->authorDate;
    }

    /** @return GithubUserId */
    public function getCommitterId()
    {
        return $this->committer->getGithubUserId();
    }

    /** @return GithubUser */
    public function getCommitter()
    {
        return $this->committer;
    }

    /** @return DateTime */
    public function getCommitterDate()
    {
        return $this->committerDate;
    }

    /** @return string */
    public function getMessage()
    {
        return $this->message;
    }

    /** @return string */
    public function getGithubCommitState()
    {
        return $this->githubCommitState;
    }
}
