<?php

namespace Statscore\Model\Response;

/**
 * Class MethodDTO
 * @package Statscore\Model\Response
 */
class MethodDTO
{
    /**
     * @var array
     */
    private $parameters = [];

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $details;

    /**
     * @var string|null
     */
    private $totalItems;

    /**
     * @var string|null
     */
    private $previousPage;

    /**
     * @var string|null
     */
    private $nextPage;

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * @return string|null
     */
    public function getTotalItems(): ?string
    {
        return $this->totalItems;
    }

    /**
     * @return string|null
     */
    public function getPreviousPage(): ?string
    {
        return $this->previousPage;
    }

    /**
     * @return string|null
     */
    public function getNextPage(): ?string
    {
        return $this->nextPage;
    }
}