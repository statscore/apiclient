<?php

namespace Statscore\Model\Response\Venue;

final class VenueSportDetailDTO
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var mixed|null
     */
    private $value;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return VenueSportDetailDTO
     */
    public function setId(int $id): VenueSportDetailDTO
    {
        $this->id = $id;

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
     * @return VenueSportDetailDTO
     */
    public function setName(string $name): VenueSportDetailDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed|null $value
     * @return VenueSportDetailDTO
     */
    public function setValue($value): VenueSportDetailDTO
    {
        $this->value = $value;

        return $this;
    }
}
