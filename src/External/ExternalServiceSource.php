<?php

namespace DevBoardLib\GithubCore\External;

/**
 * Class ExternalServiceSource.
 */
class ExternalServiceSource implements ExternalService
{
    /** @var ExternalServiceId */
    protected $id;
    /** @var string */
    private $name;

    /**
     * ExternalServiceSource constructor.
     *
     * @param ExternalServiceId $id
     * @param string            $name
     */
    public function __construct(ExternalServiceId $id, $name)
    {
        $this->id   = $id;
        $this->name = $name;
    }

    /**
     * @return ExternalServiceId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
