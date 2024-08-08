<?php
namespace App\Entity;

class VehicleSearch {

    /**
     * @var datetime|null
     */
    private $beginDate;

    /**
     * @var datetime|null
     */
    private $endDate;

    /**
     * @var integer|null
     */
    private $maxPricePerDay;

    /* Getters et Setters */
    public function getBeginDate(): ?\DateTime
    {
        return $this->beginDate;
    }

    public function setBeginDate(?\DateTime $beginDate): self
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getMaxPricePerDay(): ?int
    {
        return $this->maxPricePerDay;
    }

    public function setMaxPricePerDay(?int $maxPricePerDay): self
    {
        $this->maxPricePerDay = $maxPricePerDay;

        return $this;
    }
}