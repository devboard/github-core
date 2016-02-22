<?php
namespace DevBoardLib\GithubCore\External;

use DevBoardLib\GithubCore\Identifier;

/**
 * Class ExternalServiceId.
 */
class ExternalServiceId implements Identifier
{
    private $externalServiceId;

    /**
     * PullRequestId constructor.
     *
     * @param $externalServiceId
     */
    public function __construct($externalServiceId)
    {
        $this->externalServiceId = $externalServiceId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->externalServiceId;
    }
}
