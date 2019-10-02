<?php

namespace Statscore\Model\Response;

/**
 * Class MethodDTO
 * @package Statscore\Model\Response
 */
final class MethodDTO
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
     * @return mixed[]
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
     * @param string $name
     * @return MethodDTO
     */
    public function setName(string $name): MethodDTO
    {
        $this->name = $name;

        return $this;
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
     * @param string|null $totalItems
     * @return MethodDTO
     */
    public function setTotalItems(?string $totalItems): MethodDTO
    {
        $this->totalItems = $totalItems;

        return $this;
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
     * @param string|null $nextPage
     * @return MethodDTO
     */
    public function setNextPage(?string $nextPage): MethodDTO
    {
        $this->nextPage = $nextPage;

        return $this;
    }
}
