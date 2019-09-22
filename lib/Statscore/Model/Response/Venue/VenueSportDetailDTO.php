<?php

namespace Statscore\Model\Response\Venue;

class VenueSportDetailDTO
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
    private $velue;

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
    public function getVelue()
    {
        return $this->velue;
    }

    /**
     * @param mixed|null $velue
     * @return VenueSportDetailDTO
     */
    public function setVelue($velue): VenueSportDetailDTO
    {
        $this->velue = $velue;

        return $this;
    }
}
