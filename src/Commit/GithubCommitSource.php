<?php

namespace DevBoardLib\GithubCore\Commit;

use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Class GithubCommitSource.
 */
class GithubCommitSource implements GithubCommit
{
    /** @var GithubCommitSha */
    private $sha;
    /** @var GithubRepoId */
    protected $githubRepoId;

    /** @var GithubCommitAuthor */
    private $author;

    /** @var GithubCommitCommitter */
    private $committer;

    /** @var string */
    private $message;

    /**
     * GithubCommitSource constructor.
     *
     * @param GithubCommitSha       $sha
     * @param GithubRepoId          $githubRepoId
     * @param GithubCommitAuthor    $author
     * @param GithubCommitCommitter $committer
     * @param string                $message
     */
    public function __construct(
        GithubCommitSha $sha,
        GithubRepoId $githubRepoId,
        GithubCommitAuthor $author,
        GithubCommitCommitter $committer,
        $message
    ) {
        $this->sha          = $sha;
        $this->githubRepoId = $githubRepoId;
        $this->author       = $author;
        $this->committer    = $committer;
        $this->message      = $message;
    }

    /**
     * @return GithubCommitSha
     */
    public function getSha() : GithubCommitSha
    {
        return $this->sha;
    }

    /**
     * @return GithubRepoId
     */
    public function getGithubRepoId() : GithubRepoId
    {
        return $this->githubRepoId;
    }

    /**
     * @return GithubCommitAuthor
     */
    public function getAuthor() : GithubCommitAuthor
    {
        return $this->author;
    }

    /**
     * @return GithubCommitCommitter
     */
    public function getCommitter() : GithubCommitCommitter
    {
        return $this->committer;
    }

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
}
