<?php

namespace OptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Option price
 * @ORM\Table(name="option_price")
 * @ORM\Entity(repositoryClass="OptionBundle\Repository\OptionPriceRepository")
 */
class OptionPrice
{

    const DATE_FORMAT = 'Y-m-d';

    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float
     * @ORM\Column(name="option_price", type="float")
     */
    private $optionPrice;

    /**
     * @var OptionContract
     * @ORM\ManyToOne(targetEntity="OptionContract", inversedBy="optionPrices")
     */
    private $optionContract;

    /**
     * @var float
     * @ORM\Column(name="futures_price", type="float")
     */
    private $futuresPrice;

    /**
     * @var float
     * @ORM\Column(name="futures_price52week_high", type="float")
     */
    private $futuresPrice52WeekHigh;

    /**
     * @var float
     * @ORM\Column(name="futures_price52week_low", type="float")
     */
    private $futuresPrice52WeekLow;

    /**
     * @param \DateTime      $date
     * @param float          $optionPrice
     * @param OptionContract $optionContract
     * @param float          $futuresPrice
     * @param float          $futuresPrice52WeekHigh
     * @param float          $futuresPrice52WeekLow
     */
    public function __construct(
        \DateTime $date,
        float $optionPrice,
        OptionContract $optionContract,
        float $futuresPrice,
        float $futuresPrice52WeekHigh,
        float $futuresPrice52WeekLow
    ) {
        $this->date = $date;
        $this->optionPrice = $optionPrice;
        $this->optionContract = $optionContract;
        $this->futuresPrice = $futuresPrice;
        $this->futuresPrice52WeekHigh = $futuresPrice52WeekHigh;
        $this->futuresPrice52WeekLow = $futuresPrice52WeekLow;
    }

    /**
     * Get id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get date
     * @return string
     */
    public function getDate(): string
    {
        return $this->date->format(self::DATE_FORMAT);
    }

    /**
     * Get optionPrice
     * @return float
     */
    public function getOptionPrice(): float
    {
        return $this->optionPrice;
    }

    /**
     * Get optionContract
     * @return OptionContract
     */
    public function getOptionContract(): OptionContract
    {
        return $this->optionContract;
    }

    /**
     * Get futuresPrice
     * @return float
     */
    public function getFuturesPrice(): float
    {
        return $this->futuresPrice;
    }

    /**
     * Get futuresPrice52WeekHigh
     * @return float
     */
    public function getFuturesPrice52WeekHigh(): float
    {
        return $this->futuresPrice52WeekHigh;
    }

    /**
     * Get futuresPrice52WeekLow
     * @return float
     */
    public function getFuturesPrice52WeekLow(): float
    {
        return $this->futuresPrice52WeekLow;
    }
}
