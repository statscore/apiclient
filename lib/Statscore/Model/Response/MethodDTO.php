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
     * @param array $parameters
     * @return MethodDTO
     */
    public function setParameters(array $parameters): MethodDTO
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return MethodDTO
     */
    public function setName(string $name): MethodDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * @param string $details
     * @return MethodDTO
     */
    public function setDetails(string $details): MethodDTO
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTotalItems(): ?string
    {
        return $this->totalItems;
    }

    /**
     * @param string|null $totalItems
     * @return MethodDTO
     */
    public function setTotalItems(?string $totalItems): MethodDTO
    {
        $this->totalItems = $totalItems;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreviousPage(): ?string
    {
        return $this->previousPage;
    }

    /**
     * @param string|null $previousPage
     * @return MethodDTO
     */
    public function setPreviousPage(?string $previousPage): MethodDTO
    {
        $this->previousPage = $previousPage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNextPage(): ?string
    {
        return $this->nextPage;
    }

    /**
     * @param string|null $nextPage
     * @return MethodDTO
     */
    public function setNextPage(?string $nextPage): MethodDTO
    {
        $this->nextPage = $nextPage;

        return $this;
    }
}