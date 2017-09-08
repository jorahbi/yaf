<?php

namespace Entity;

/**
 * KoActivityQinziRate
 */
class KoActivityQinziRate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $minInvestAmount = '0';

    /**
     * @var string
     */
    private $incomeRange;

    /**
     * @var string
     */
    private $incomeRate;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $createdTime;

    /**
     * @var integer
     */
    private $updatedTime;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set minInvestAmount
     *
     * @param integer $minInvestAmount
     *
     * @return KoActivityQinziRate
     */
    public function setMinInvestAmount($minInvestAmount)
    {
        $this->minInvestAmount = $minInvestAmount;

        return $this;
    }

    /**
     * Get minInvestAmount
     *
     * @return integer
     */
    public function getMinInvestAmount()
    {
        return $this->minInvestAmount;
    }

    /**
     * Set incomeRange
     *
     * @param string $incomeRange
     *
     * @return KoActivityQinziRate
     */
    public function setIncomeRange($incomeRange)
    {
        $this->incomeRange = $incomeRange;

        return $this;
    }

    /**
     * Get incomeRange
     *
     * @return string
     */
    public function getIncomeRange()
    {
        return $this->incomeRange;
    }

    /**
     * Set incomeRate
     *
     * @param string $incomeRate
     *
     * @return KoActivityQinziRate
     */
    public function setIncomeRate($incomeRate)
    {
        $this->incomeRate = $incomeRate;

        return $this;
    }

    /**
     * Get incomeRate
     *
     * @return string
     */
    public function getIncomeRate()
    {
        return $this->incomeRate;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return KoActivityQinziRate
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdTime
     *
     * @param integer $createdTime
     *
     * @return KoActivityQinziRate
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    /**
     * Get createdTime
     *
     * @return integer
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Set updatedTime
     *
     * @param integer $updatedTime
     *
     * @return KoActivityQinziRate
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updatedTime = $updatedTime;

        return $this;
    }

    /**
     * Get updatedTime
     *
     * @return integer
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }
}

