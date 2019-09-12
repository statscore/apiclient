<?php

namespace Statscore\Model\Response\Language;

/**
 * Class LanguageDTO
 * @package Statscore\Model\Response\Language
 */
class LanguageDTO
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $originalName;

    /**
     * @var string
     */
    private $active;

    /**
     * @var integer
     */
    private $ut;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
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
    public function getOriginalName(): string
    {
        return $this->originalName;
    }

    /**
     * @return string
     */
    public function getActive(): string
    {
        return $this->active;
    }

    /**
     * @return integer
     */
    public function getUt(): int
    {
        return $this->ut;
    }

    /**
     * @param int $id
     * @return LanguageDTO
     */
    public function setId(int $id): LanguageDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $code
     * @return LanguageDTO
     */
    public function setCode(string $code): LanguageDTO
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @param string $name
     * @return LanguageDTO
     */
    public function setName(string $name): LanguageDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $originalName
     * @return LanguageDTO
     */
    public function setOriginalName(string $originalName): LanguageDTO
    {
        $this->originalName = $originalName;

        return $this;
    }

    /**
     * @param string $active
     * @return LanguageDTO
     */
    public function setActive(string $active): LanguageDTO
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @param int $ut
     * @return LanguageDTO
     */
    public function setUt(int $ut): LanguageDTO
    {
        $this->ut = $ut;

        return $this;
    }
}
