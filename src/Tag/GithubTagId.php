<?php
namespace DevBoardLib\GithubCore\Tag;

use DevBoardLib\GithubCore\Identifier;
use DevBoardLib\GithubCore\Repo\GithubRepoId;

/**
 * Class GithubTagId.
 */
class GithubTagId implements Identifier
{
    /** @var GithubRepoId */
    private $githubRepoId;
    /** @var string */
    private $tagName;

    /**
     * BranchId constructor.
     *
     * @param GithubRepoId $githubRepoId
     * @param              $tagName
     */
    public function __construct(GithubRepoId $githubRepoId, $tagName)
    {
        $this->githubRepoId = $githubRepoId;
        $this->tagName      = $tagName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->githubRepoId->__toString().'-'.$this->tagName;
    }
}
