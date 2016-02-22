<?php
namespace DevBoardLib\GithubCore\Commit;

use DevBoardLib\GithubCore\Identifier;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Class GithubCommitId.
 */
class GithubCommitId implements Identifier
{
    /** @var GithubRepoId */
    private $githubRepoId;
    /** @var GithubCommitSha */
    private $commitSha;

    /**
     * BranchId constructor.
     *
     * @param GithubRepoId    $githubRepoId
     * @param GithubCommitSha $commitSha
     */
    public function __construct(GithubRepoId $githubRepoId, GithubCommitSha $commitSha)
    {
        $this->githubRepoId = $githubRepoId;
        $this->commitSha    = $commitSha;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->githubRepoId->__toString().'-'.$this->commitSha->__toString();
    }
}
